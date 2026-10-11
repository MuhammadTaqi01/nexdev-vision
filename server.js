const http = require('http');
const fs = require('fs');
const path = require('path');
const mailHandler = require('./api/send-mail');

const PORT = process.env.PORT || 3000;

const MIME_TYPES = {
  '.html': 'text/html; charset=utf-8',
  '.css': 'text/css; charset=utf-8',
  '.js': 'application/javascript; charset=utf-8',
  '.json': 'application/json; charset=utf-8',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.ico': 'image/x-icon'
};

const server = http.createServer((req, res) => {
  const parsedUrl = new URL(req.url, `http://${req.headers.host || 'localhost'}`);
  const pathname = parsedUrl.pathname;

  // Handle Contact API (same as Vercel /api/send-mail)
  if (pathname === '/api/send-mail' || pathname === '/send-mail.php') {
    let bodyData = '';
    req.on('data', chunk => { bodyData += chunk; });
    req.on('end', async () => {
      let body = {};
      try {
        if (bodyData) {
          body = JSON.parse(bodyData);
        }
      } catch (e) {
        try {
          body = Object.fromEntries(new URLSearchParams(bodyData));
        } catch (_) {}
      }

      req.body = body;

      // Polyfill Vercel response helper methods
      res.status = function(code) {
        res.statusCode = code;
        return res;
      };
      res.json = function(data) {
        res.setHeader('Content-Type', 'application/json; charset=utf-8');
        res.end(JSON.stringify(data));
        return res;
      };

      try {
        await mailHandler(req, res);
      } catch (err) {
        console.error('Local server error:', err);
        res.statusCode = 500;
        res.setHeader('Content-Type', 'application/json; charset=utf-8');
        res.end(JSON.stringify({ ok: false, error: err.message }));
      }
    });
    return;
  }

  // Serve static files
  let relativePath = pathname === '/' ? 'index.html' : pathname.replace(/^\/+/, '');
  const filePath = path.join(__dirname, relativePath);

  fs.stat(filePath, (err, stats) => {
    if (err || !stats.isFile()) {
      res.statusCode = 404;
      res.setHeader('Content-Type', 'text/plain');
      res.end('404 Not Found');
      return;
    }

    const ext = path.extname(filePath).toLowerCase();
    const contentType = MIME_TYPES[ext] || 'application/octet-stream';
    res.setHeader('Content-Type', contentType);
    fs.createReadStream(filePath).pipe(res);
  });
});

server.listen(PORT, () => {
  console.log(`NexDev Vision running locally at: http://localhost:${PORT}`);
});
