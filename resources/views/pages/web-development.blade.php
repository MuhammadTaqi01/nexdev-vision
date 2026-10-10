<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/web-development.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        Web Development Services</p>
                    <h1 class="service-hero-title" style="color: #fff;">Custom Web Development Solutions <span
                            style="color: var(--primary);">That Grow Your
                            Business</span></h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        We build fast, secure, and scalable websites and web applications that drive conversions and
                        support your business goals. From landing pages to complex platforms, our team delivers
                        high-performance code for long-term success.
                    </p>
                    <div class="service-hero-actions">
                        <a href="{{ route('contactus') }}" class="btn btn-primary">Get a Free Consultation</a>
                        <a href="#services" class="btn btn-outline">View Services</a>
                    </div>
                </div>
                <div class="service-hero-highlight">
                    <div class="service-hero-metric">
                        <span class="metric-label">Projects Delivered</span>
                        <span class="metric-value">100+</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Avg. Client Rating</span>
                        <span class="metric-value">4.9/5</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Years of Experience</span>
                        <span class="metric-value">10+</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What we build</p>
                <h2 class="section-title">End-to-End Web Development Services</h2>
                <p class="section-subtitle">
                    From idea to launch, we cover every layer of modern web development so you get a future-proof
                    product that performs.
                </p>
            </div>

            <div class="card-grid">
                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Frontend Development</h3>
                    <p>
                        Pixel-perfect, responsive interfaces built with modern HTML, CSS and JavaScript frameworks for
                        a smooth user experience on every device.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend Development</h3>
                    <p>
                        Secure, scalable server-side logic using PHP, Laravel and robust database design to power your
                        application behind the scenes.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Full-Stack Development</h3>
                    <p>
                        Complete end-to-end solutions where our team handles everything from UI to infrastructure,
                        ensuring consistency and faster delivery.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E‑commerce Websites</h3>
                    <p>
                        Conversion-focused online stores with secure payments, product management and analytics to help
                        you sell more, 24/7.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="py-5 recent-projects-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Portfolio</p>
                <h2 class="section-title">Recent Projects</h2>
                <p class="section-subtitle">
                    Websites and web applications we've built for clients across industries.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <a href="https://capsstudio.co.uk/" target="_blank" rel="noopener noreferrer"
                        class="recent-project-card d-block text-decoration-none">
                        <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease;">
                            <div class="recent-project-icon mb-3">
                                <img src="{{ asset('images/projects/capsstudio.png') }}" alt="CapsStudio" width="64" height="64"
                                    style="border-radius: 12px; object-fit: contain;"
                                    onerror="this.src='https://capsstudio.co.uk/favicon.ico'; this.onerror=null;">
                            </div>
                            <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">CapsStudio</h3>
                            <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Personalised caps & custom headwear for men & women in the UK.</p>
                            <span class="d-inline-flex align-items-center mt-3" style="color: var(--primary); font-weight: 600; font-size: 0.9rem;">Visit Site <i class="fas fa-external-link-alt ms-1"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="https://grocerystationone.com/" target="_blank" rel="noopener noreferrer"
                        class="recent-project-card d-block text-decoration-none">
                        <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease;">
                            <div class="recent-project-icon mb-3">
                                <img src="{{ asset('images/projects/grocerystationone.png') }}" alt="Grocery Station One" width="64" height="64"
                                    style="border-radius: 12px; object-fit: contain;"
                                    onerror="this.src='https://grocerystationone.com/favicon.ico'; this.onerror=null;">
                            </div>
                            <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Grocery Station One</h3>
                            <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Online grocery store with spices, dry fruits, tea, and food ingredients.</p>
                            <span class="d-inline-flex align-items-center mt-3" style="color: var(--primary); font-weight: 600; font-size: 0.9rem;">Visit Site <i class="fas fa-external-link-alt ms-1"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="https://thesiswritingexperts.co.uk/" target="_blank" rel="noopener noreferrer"
                        class="recent-project-card d-block text-decoration-none">
                        <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease;">
                            <div class="recent-project-icon mb-3">
                                <img src="{{ asset('images/projects/thesiswritingexperts.png') }}" alt="Thesis Writing Experts" width="64" height="64"
                                    style="border-radius: 12px; object-fit: contain;"
                                    onerror="this.src='https://thesiswritingexperts.co.uk/favicon.ico'; this.onerror=null;">
                            </div>
                            <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Thesis Writing Experts</h3>
                            <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Professional thesis writing help in the UK & EU for students.</p>
                            <span class="d-inline-flex align-items-center mt-3" style="color: var(--primary); font-weight: 600; font-size: 0.9rem;">Visit Site <i class="fas fa-external-link-alt ms-1"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section (Refined Vertical Timeline) -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Step by Step Process</p>
                <h2 class="section-title text-white">We Complete every <span style="color: var(--primary);">Step
                        Carefully</span></h2>
                <p class="section-subtitle">
                    A transparent, step-by-step process that keeps you involved and ensures we deliver exactly what your
                    business needs.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Planning -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Planning</h3>
                        <p class="text-white">Detailed architecture and strategy to ensure your project starts on the
                            right track.</p>
                    </div>
                </div>

                <!-- Step 2: Design -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>Design</h3>
                        <p class="text-white">User-centric design focus ensures your digital product is both intuitive
                            and visually
                            appealing.</p>
                    </div>
                </div>

                <!-- Step 3: Development -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Development</h3>
                        <p class="text-white">Building high-performance, secure, and scalable web solutions using modern
                            technologies.</p>
                    </div>
                </div>

                <!-- Step 4: Testing -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Testing</h3>
                        <p class="text-white">Rigorous quality assurance to ensure every feature works perfectly across
                            all platforms.</p>
                    </div>
                </div>

                <!-- Step 5: Launch -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Launch</h3>
                        <p class="text-white">Deploying your project to production with everything optimized for a
                            smooth start.</p>
                    </div>
                </div>

                <!-- Step 6: Support -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Support</h3>
                        <p class="text-white">Ongoing maintenance and updates to keep your web application competitive
                            and secure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 benefits-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Why choose us</p>
                <h2 class="section-title">Websites Built for Performance and Growth</h2>
                <p class="section-subtitle">
                    We focus on the details that matter so your website not only looks great, but also drives real
                    business results.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Fast Loading Speed</h3>
                    <p>Optimized assets, clean code and best practices to keep your pages loading quickly worldwide.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Mobile Responsive</h3>
                    <p>Every layout is designed mobile‑first so your website looks and works perfectly on any screen
                        size.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>SEO‑Friendly Structure</h3>
                    <p>Clean HTML, semantic markup and technical SEO foundations that help search engines understand
                        your site.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Security First</h3>
                    <p>Secure coding standards, data validation and regular updates to keep your application protected.
                    </p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Scalable Architecture</h3>
                    <p>We architect solutions that can grow with your traffic, features and business needs.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Dedicated Support</h3>
                    <p>Responsive communication and long‑term partnerships so you’re never alone after launch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Technologies</p>
                <h2 class="section-title">Modern Stack for Reliable <span style="color: var(--primary);">Web
                        Experiences</span></h2>
                <p class="section-subtitle">
                    We combine battle-tested technologies with modern tools to build web solutions that are fast,
                    secure and easy to maintain.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">HTML5</div>
                <div class="tech-pill">CSS3</div>
                <div class="tech-pill">JavaScript</div>
                <div class="tech-pill">React</div>
                <div class="tech-pill">Laravel</div>
                <div class="tech-pill">PHP</div>
                <div class="tech-pill">Python</div>
                <div class="tech-pill">Flask</div>
                <div class="tech-pill">MySQL</div>
                <div class="tech-pill">REST APIs</div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" style="text-transform: uppercase; font-weight: 800; font-size: 2.5rem;">
                Frequently Asked Questions</h2>
            <div class="faq-accordion"
                style="max-width: 800px; margin: 0 auto; border: 1px solid #eee; border-radius: 8px; overflow: hidden;">

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How long does it take to build a website?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        The timeline depends on the complexity of the project. A basic brochure website typically takes
                        2–4 weeks, while a custom e-commerce website or web application can take 8–12 weeks or more. A
                        detailed timeline is provided during the proposal phase.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do you provide hosting and domain services?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes, we assist with domain registration and setting up secure, high-performance hosting. We also
                        offer ongoing maintenance packages that include hosting management, daily backups, and security
                        updates.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Will my website be mobile-friendly?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Absolutely. All websites are built using a mobile-first approach, ensuring optimal performance
                        and appearance across smartphones, tablets, and desktop devices.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can I update the content myself?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. Most websites are built using user-friendly CMS platforms such as WordPress or custom
                        Laravel dashboards, allowing easy updates to content, images, and products without coding
                        knowledge.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do you offer support after launch?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. We provide 30 days of free post-launch support to resolve any issues. After that, optional
                        maintenance and support packages are available to keep your website secure, updated, and running
                        smoothly.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-5 final-cta-section">
        <div class="container">
            <div class="final-cta-inner">
                <div>
                    <h2>Ready to build a website that actually <span style="color: var(--primary);">grows your
                            business?</span></h2>
                    <p>Tell us about your project and we’ll share a tailored plan, timelines and budget—no obligation.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Request a Quote</a>
                    <a href="mailto:support@nexdevvision.com" class="btn btn-outline service-hero-secondary">Email Your
                        Brief</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // FAQ Toggle
            const faqBtns = document.querySelectorAll('.faq-btn');
            faqBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const answer = btn.nextElementSibling;
                    const icon = btn.querySelector('i');

                    // Close others
                    document.querySelectorAll('.faq-answer').forEach(a => {
                        if (a !== answer) a.classList.add('d-none');
                    });
                    document.querySelectorAll('.faq-btn i').forEach(i => {
                        if (i !== icon) {
                            i.classList.remove('fa-minus');
                            i.classList.add('fa-plus');
                        }
                    });

                    // Toggle current
                    answer.classList.toggle('d-none');
                    if (answer.classList.contains('d-none')) {
                        icon.classList.remove('fa-minus');
                        icon.classList.add('fa-plus');
                    } else {
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-minus');
                    }
                });
            });

            // Counters
            const counters = document.querySelectorAll('.stat-item h2');
            const speed = 200; // The lower the slower

            const animateCounters = () => {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-count');
                        const count = +counter.innerText;

                        // Lower inc to slow and higher to slow
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 20);
                        } else {
                            counter.innerText = target + '+';
                        }
                    };
                    updateCount();
                });
            }

            // Trigger animation when in view
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.disconnect(); // Run once
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));

            // Timeline Animation
            const timelineItems = document.querySelectorAll('.v-timeline-item');
            const timelineObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    }
                });
            }, { threshold: 0.2 });

            timelineItems.forEach(item => timelineObserver.observe(item));
        });
    </script>
</x-layout>