/*!
 * CursorField v1.0 — cursor-reactive ambient background.
 * Dot-grid + glowing particles that repel/attract near the pointer,
 * soft gradient glow behind the cursor with a fading trail.
 * Fixed canvas behind content, 60fps-normalized, touch-aware,
 * reduced-motion aware. Colors are read from CSS custom properties.
 *
 * Usage:
 *   <canvas id="bg" aria-hidden="true"></canvas>
 *   CursorField.init('#bg');
 *   CursorField.init('#bg', { particleCount: 40, mode: 'attract' });
 */
(function (global) {
  'use strict';

  /* ---------- easy settings ---------- */
  var DEFAULTS = {
    grid: true,               // dot-grid layer on/off
    gridSpacing: 34,          // px between grid dots
    gridDot: 1.1,             // grid dot radius
    gridInfluence: 130,       // cursor radius that moves grid dots
    gridRepel: 26,            // max grid dot displacement (px)

    particles: true,          // floating particle layer on/off
    particleCount: 70,        // base count (auto-scaled by area + mobile)
    particleMin: 0.6,         // particle radius range
    particleMax: 2.4,
    particleSpeed: 0.35,      // drift speed
    particleInfluence: 150,   // cursor radius that moves particles
    particleRepel: 70,        // repel strength (px push)
    mode: 'repel',            // 'repel' | 'attract'

    glow: true,               // gradient glow behind cursor
    glowRadius: 220,
    glowAlpha: 0.16,

    trail: true,              // fading trail behind cursor
    trailLength: 22,          // number of trail points
    trailWidth: 2.5,
    trailAlpha: 0.35,

    ease: 0.14,               // cursor smoothing (lerp factor)
    mobileScale: 0.45,        // intensity multiplier on touch devices
    dprCap: 2,                // devicePixelRatio cap (perf)
    reducedMotion: 'static',  // 'static' (calm frame) | 'off' (nothing)

    /* colors come from CSS variables — never hardcoded.
       Define in your theme, e.g.:
         :root { --cf-accent:#6ea8ff; --cf-glow:#6ea8ff;
                 --cf-grid:#93a7c7;   --cf-trail:#6ea8ff; } */
    css: {
      accent: '--cf-accent',
      glow:   '--cf-glow',
      grid:   '--cf-grid',
      trail:  '--cf-trail'
    },
    fallback: {               // used only if a variable is missing
      accent: '110,168,255', glow: '110,168,255',
      grid: '147,167,199', trail: '110,168,255'
    }
  };

  /* ---------- helpers ---------- */
  function clamp(v, a, b) { return v < a ? a : v > b ? b : v; }
  function lerp(a, b, t) { return a + (b - a) * t; }
  function rgba(rgb, a) { return 'rgba(' + rgb + ',' + a + ')'; }

  function readVar(root, name, fb) {
    var v = '';
    try { v = getComputedStyle(root).getPropertyValue(name); } catch (e) {}
    v = (v || '').trim();
    if (!v) return fb;
    if (v.charAt(0) === '#') {
      var h = v.slice(1);
      if (h.length === 3) h = h[0] + h[0] + h[1] + h[1] + h[2] + h[2];
      var n = parseInt(h, 16);
      if (isNaN(n)) return fb;
      return [(n >> 16) & 255, (n >> 8) & 255, n & 255].join(',');
    }
    var m = v.match(/(\d+)\D+(\d+)\D+(\d+)/);
    return m ? m[1] + ',' + m[2] + ',' + m[3] : fb;
  }

  /* ---------- component ---------- */
  function Field(canvas, opts) {
    var o = this.o = {};
    var k;
    for (k in DEFAULTS) o[k] = DEFAULTS[k];
    if (opts) for (k in opts) o[k] = opts[k];

    var c = this.c = canvas;
    var x = this.x = c.getContext('2d');
    var root = document.documentElement;

    this.mobile = matchMedia('(pointer: coarse)').matches;
    this.reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
    this.scale = this.mobile ? o.mobileScale : 1;

    this.col = {
      accent: readVar(root, o.css.accent, o.fallback.accent),
      glow:   readVar(root, o.css.glow,   o.fallback.glow),
      grid:   readVar(root, o.css.grid,   o.fallback.grid),
      trail:  readVar(root, o.css.trail,  o.fallback.trail)
    };

    this.p = { x: -9999, y: -9999, tx: -9999, ty: -9999, on: false };
    this.trail = [];
    this.t = 0;
    this.raf = 0;
    this.running = false;

    this.resize = this.resize.bind(this);
    this.frame = this.frame.bind(this);
    this.onMove = this.onMove.bind(this);
    this.onLeave = this.onLeave.bind(this);
    this.refreshColors = this.refreshColors.bind(this);

    addEventListener('resize', this.resize, { passive: true });
    addEventListener('pointermove', this.onMove, { passive: true });
    addEventListener('pointerdown', this.onMove, { passive: true });
    addEventListener('pointerup', this.onMove, { passive: true });
    document.addEventListener('pointerleave', this.onLeave);
    addEventListener('blur', this.onLeave);

    /* theme can change at runtime (dark-mode toggle etc.) */
    this.themeObs = null;
    try {
      this.themeObs = new MutationObserver(this.refreshColors);
      this.themeObs.observe(root, { attributes: true, attributeFilter: ['class', 'style', 'data-theme'] });
    } catch (e) {}

    this.resize();
    this.seed();

    if (this.reduced && o.reducedMotion === 'off') {
      this.clear();
    } else if (this.reduced) {
      this.drawStatic();
    } else {
      this.start();
    }
  }

  Field.prototype.refreshColors = function () {
    var root = document.documentElement, o = this.o;
    this.col.accent = readVar(root, o.css.accent, o.fallback.accent);
    this.col.glow   = readVar(root, o.css.glow,   o.fallback.glow);
    this.col.grid   = readVar(root, o.css.grid,   o.fallback.grid);
    this.col.trail  = readVar(root, o.css.trail,  o.fallback.trail);
    if (this.reduced) this.drawStatic();
  };

  Field.prototype.resize = function () {
    var dpr = Math.min(devicePixelRatio || 1, this.o.dprCap);
    this.w = innerWidth; this.h = innerHeight;
    this.c.width = Math.floor(this.w * dpr);
    this.c.height = Math.floor(this.h * dpr);
    this.c.style.width = this.w + 'px';
    this.c.style.height = this.h + 'px';
    this.x.setTransform(dpr, 0, 0, dpr, 0, 0);
    this.buildGrid();
    if (this.reduced) this.drawStatic();
  };

  Field.prototype.buildGrid = function () {
    this.dots = [];
    if (!this.o.grid) return;
    var s = this.o.gridSpacing;
    for (var y = s / 2; y < this.h; y += s)
      for (var x = s / 2; x < this.w; x += s)
        this.dots.push({ x: x, y: y, dx: 0, dy: 0 });
  };

  Field.prototype.seed = function () {
    var o = this.o;
    var area = clamp((this.w * this.h) / (1440 * 900), 0.5, 1.4);
    var n = Math.round(o.particleCount * this.scale * area);
    this.pts = [];
    for (var i = 0; i < n; i++) {
      this.pts.push({
        x: Math.random() * this.w,
        y: Math.random() * this.h,
        vx: (Math.random() - 0.5) * o.particleSpeed,
        vy: (Math.random() - 0.5) * o.particleSpeed,
        r: lerp(o.particleMin, o.particleMax, Math.random()),
        a: lerp(0.25, 0.7, Math.random()),
        ox: 0, oy: 0
      });
    }
  };

  Field.prototype.onMove = function (e) {
    var p = this.p;
    if (!p.on) { p.x = p.tx = e.clientX; p.y = p.ty = e.clientY; }
    p.tx = e.clientX; p.ty = e.clientY; p.on = true;
    if (this.reduced) { p.x = p.tx; p.y = p.ty; this.drawStatic(); }
  };

  Field.prototype.onLeave = function () {
    this.p.on = false;
    if (this.reduced) this.drawStatic();
  };

  Field.prototype.start = function () {
    if (this.running) return;
    this.running = true;
    this.last = performance.now();
    this.raf = requestAnimationFrame(this.frame);
  };

  Field.prototype.stop = function () {
    this.running = false;
    cancelAnimationFrame(this.raf);
  };

  Field.prototype.frame = function (now) {
    if (!this.running) return;
    var dt = clamp((now - this.last) / 16.667, 0.25, 2.5);
    this.last = now;
    this.t += dt;
    this.update(dt);
    this.draw();
    this.raf = requestAnimationFrame(this.frame);
  };

  /* ---------- physics ---------- */
  Field.prototype.update = function (dt) {
    var o = this.o, p = this.p, i, d;

    p.x = lerp(p.x, p.tx, 1 - Math.pow(1 - o.ease, dt));
    p.y = lerp(p.y, p.ty, 1 - Math.pow(1 - o.ease, dt));

    if (o.trail && p.on) {
      this.trail.push({ x: p.x, y: p.y });
      if (this.trail.length > o.trailLength) this.trail.shift();
    } else if (this.trail.length) {
      this.trail.shift();
    }

    var sign = o.mode === 'attract' ? -1 : 1;

    for (i = 0; i < this.dots.length; i++) {
      d = this.dots[i];
      d.dx = lerp(d.dx, 0, 1 - Math.pow(0.86, dt));
      d.dy = lerp(d.dy, 0, 1 - Math.pow(0.86, dt));
      if (p.on) {
        var gx = d.x - p.x, gy = d.y - p.y;
        var gd = Math.sqrt(gx * gx + gy * gy);
        if (gd < o.gridInfluence && gd > 0.001) {
          var gf = 1 - gd / o.gridInfluence;
          d.dx += sign * (gx / gd) * gf * o.gridRepel * 0.22 * dt;
          d.dy += sign * (gy / gd) * gf * o.gridRepel * 0.22 * dt;
        }
      }
    }

    for (i = 0; i < this.pts.length; i++) {
      d = this.pts[i];
      d.x += d.vx * dt; d.y += d.vy * dt;
      if (d.x < -8) d.x = this.w + 8;
      if (d.x > this.w + 8) d.x = -8;
      if (d.y < -8) d.y = this.h + 8;
      if (d.y > this.h + 8) d.y = -8;
      d.ox = lerp(d.ox, 0, 1 - Math.pow(0.9, dt));
      d.oy = lerp(d.oy, 0, 1 - Math.pow(0.9, dt));
      if (p.on) {
        var px = d.x - p.x, py = d.y - p.y;
        var pd = Math.sqrt(px * px + py * py);
        if (pd < o.particleInfluence && pd > 0.001) {
          var pf = 1 - pd / o.particleInfluence;
          d.ox += sign * (px / pd) * pf * o.particleRepel * 0.16 * dt;
          d.oy += sign * (py / pd) * pf * o.particleRepel * 0.16 * dt;
        }
      }
    }
  };

  /* ---------- render ---------- */
  Field.prototype.draw = function () {
    var x = this.x, o = this.o, i, d;
    x.clearRect(0, 0, this.w, this.h);

    if (o.grid) {
      x.fillStyle = rgba(this.col.grid, 1);
      for (i = 0; i < this.dots.length; i++) {
        d = this.dots[i];
        var nx = d.x + d.dx, ny = d.y + d.dy;
        var near = 1 - clamp(Math.hypot(nx - this.p.x, ny - this.p.y) / o.gridInfluence, 0, 1);
        x.globalAlpha = 0.16 + near * 0.5;
        x.beginPath();
        x.arc(nx, ny, o.gridDot + near * 0.9, 0, 6.2832);
        x.fill();
      }
      x.globalAlpha = 1;
    }

    if (o.particles) {
      x.fillStyle = rgba(this.col.accent, 1);
      for (i = 0; i < this.pts.length; i++) {
        d = this.pts[i];
        x.globalAlpha = d.a;
        x.beginPath();
        x.arc(d.x + d.ox, d.y + d.oy, d.r, 0, 6.2832);
        x.fill();
      }
      x.globalAlpha = 1;
    }

    this.drawCursorFx();
  };

  Field.prototype.drawCursorFx = function () {
    var x = this.x, o = this.o, p = this.p, i;
    if (!p.on) return;

    if (o.trail && this.trail.length > 1) {
      x.lineCap = 'round'; x.lineJoin = 'round';
      for (i = 1; i < this.trail.length; i++) {
        var t = i / this.trail.length;
        x.strokeStyle = rgba(this.col.trail, t * o.trailAlpha);
        x.lineWidth = Math.max(0.3, t * o.trailWidth);
        x.beginPath();
        x.moveTo(this.trail[i - 1].x, this.trail[i - 1].y);
        x.lineTo(this.trail[i].x, this.trail[i].y);
        x.stroke();
      }
    }

    if (o.glow) {
      var g = x.createRadialGradient(p.x, p.y, 0, p.x, p.y, o.glowRadius);
      g.addColorStop(0, rgba(this.col.glow, o.glowAlpha));
      g.addColorStop(1, rgba(this.col.glow, 0));
      x.fillStyle = g;
      x.beginPath();
      x.arc(p.x, p.y, o.glowRadius, 0, 6.2832);
      x.fill();
    }
  };

  /* reduced-motion: one calm frame, no animation */
  Field.prototype.drawStatic = function () {
    var x = this.x, o = this.o, i, d;
    x.clearRect(0, 0, this.w, this.h);
    if (o.grid) {
      x.fillStyle = rgba(this.col.grid, 0.16);
      for (i = 0; i < this.dots.length; i++) {
        d = this.dots[i];
        x.beginPath(); x.arc(d.x, d.y, o.gridDot, 0, 6.2832); x.fill();
      }
    }
    if (o.particles) {
      x.fillStyle = rgba(this.col.accent, 1);
      for (i = 0; i < this.pts.length; i++) {
        d = this.pts[i];
        x.globalAlpha = d.a * 0.6;
        x.beginPath(); x.arc(d.x, d.y, d.r, 0, 6.2832); x.fill();
      }
      x.globalAlpha = 1;
    }
  };

  Field.prototype.clear = function () {
    this.x.clearRect(0, 0, this.w, this.h);
  };

  Field.prototype.destroy = function () {
    this.stop();
    removeEventListener('resize', this.resize);
    removeEventListener('pointermove', this.onMove);
    removeEventListener('pointerdown', this.onMove);
    removeEventListener('pointerup', this.onMove);
    document.removeEventListener('pointerleave', this.onLeave);
    removeEventListener('blur', this.onLeave);
    if (this.themeObs) this.themeObs.disconnect();
    this.clear();
  };

  /* ---------- public API ---------- */
  global.CursorField = {
    init: function (sel, opts) {
      var c = typeof sel === 'string' ? document.querySelector(sel) : sel;
      if (!c || !c.getContext) return null;
      var f = new Field(c, opts);
      c.__cf = f;
      return f;
    },
    get: function (sel) {
      var c = typeof sel === 'string' ? document.querySelector(sel) : sel;
      return c ? (c.__cf || null) : null;
    }
  };
})(window);
