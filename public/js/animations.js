/**
 * Skiper UI & Animmaster Lib Inspired Interactive Engine
 * Handles Clean Card Interactions, Scroll-Stagger Reveals, Typing Animation, and Micro-Interactions.
 */

document.addEventListener('DOMContentLoaded', () => {
    // --------------------------------------------------------------------------
    // 1. Staggered Scroll-Reveal Engine (Cascading Entrances)
    // --------------------------------------------------------------------------
    const revealTargets = document.querySelectorAll(
        '.section-header, .card-grid > *, .process-grid > *, .recent-projects-section .col-md-6, .tech-grid > *, .v-timeline-item, .home-service-card'
    );

    revealTargets.forEach((el) => {
        el.classList.add('anim-reveal');
        const parent = el.closest('.row, .card-grid, .process-grid, .tech-grid, .v-timeline-container');
        if (parent) {
            const siblings = Array.from(parent.querySelectorAll('.anim-reveal'));
            const siblingIndex = siblings.indexOf(el);
            el.style.transitionDelay = `${siblingIndex * 70}ms`;
        }
    });

    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    document.querySelectorAll('.anim-reveal').forEach((el) => {
        revealObserver.observe(el);
    });

    // --------------------------------------------------------------------------
    // 2. Hover Micro-Interaction on Primary CTA Buttons
    // --------------------------------------------------------------------------
    const magneticBtns = document.querySelectorAll('.btn-primary, .btn-outline');
    magneticBtns.forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            btn.style.transform = `translate(${x * 0.12}px, ${y * 0.12}px) scale(1.02)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = '';
        });
    });

    // --------------------------------------------------------------------------
    // 3. Dynamic Typing Animation (Single Solid Color, Typewriter Effect)
    // --------------------------------------------------------------------------
    const typingElements = document.querySelectorAll('.typing-text');
    typingElements.forEach((el) => {
        let words = [];
        try {
            const raw = el.getAttribute('data-words');
            words = raw ? JSON.parse(raw) : [];
        } catch (e) {
            words = [el.textContent.trim()];
        }

        if (!words || words.length === 0) {
            words = [el.textContent.trim()];
        }

        let wordIndex = 0;
        let charIndex = words[0].length;
        let isDeleting = true;
        const typeSpeed = 75;
        const deleteSpeed = 35;
        const pauseDelay = 2200;

        // Ensure initial word is populated cleanly
        el.textContent = words[0];

        function type() {
            const currentWord = words[wordIndex];

            if (isDeleting) {
                el.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                el.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }

            let currentDelay = isDeleting ? deleteSpeed : typeSpeed;

            if (!isDeleting && charIndex === currentWord.length) {
                currentDelay = pauseDelay;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                currentDelay = 350;
            }

            setTimeout(type, currentDelay);
        }

        // Wait a comfortable moment before cycling to the next word
        setTimeout(type, 1800);
    });
});
