<x-layout>
    <!-- Hero Section (Image 1 Style) -->
    <section class="hero-section" style="height: 100vh; position: relative; overflow: hidden;">
        <div
            style="position: absolute; inset: 0; background-image: url('/images/hero.jpg'); background-size: cover; background-position: center; opacity: 0.8; z-index: 0;">
        </div>
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="hero-content text-center"
            style="position: relative; z-index: 2; max-width: 900px; padding-top: 100px; margin: auto;">
            <h1 class="hero-main-title" style="color: #fff; font-weight: 800; text-transform: uppercase;">
                Building Digital Experiences <br class="d-none d-md-inline">
                <span class="typing-container">
                    <span class="typing-text text-gradient" data-words='["That Drive Growth", "For Modern Brands", "Powered By AI", "Engineered To Scale", "That Deliver Results"]'>That Drive Growth</span><span class="typing-cursor">|</span>
                </span>
            </h1>
            <p style="font-size: 1.2rem; color: #f1f1f1; font-weight: 500; line-height: 1.8; margin-bottom: 30px;">
                We provide professional <strong>Development</strong>, <strong>Design</strong>,
                <strong>Digital Marketing</strong>, <strong>Automation</strong>, <strong>SaaS</strong>, <strong>Data Analytics</strong>, and <strong>AI Engineering</strong> to help businesses
                stand out, scale faster, and succeed in the digital world.
            </p>
            <div class="hero-buttons mt-4" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                <a href="#services" class="btn btn-outline">
                    Our Services
                </a>
                <a href="{{ route('pricing') }}" class="btn btn-primary">
                    View Pricing
                </a>
            </div>
        </div>
    </section>

    <!-- Intro Section (Image 2 Style) -->
    <section class="py-5" style="background: #fff;">
        <div class="container text-center">
            <h4 style="color: var(--primary); text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                We Help You Build, Grow & Succeed
            </h4>

            <h2 style="font-size: 2.5rem; font-weight: 800; max-width: 1000px; margin: 20px auto; color: #000;">
                A COMPLETE DIGITAL SOLUTIONS COMPANY WORKING GLOBALLY
            </h2>

            <p style="max-width: 1000px; margin: 30px auto; font-size: 1.1rem; color: #555;">
                Nexdev Vision is a full-service digital solutions company working globally, focused on delivering
                reliable, result-driven services across web development, graphic design, digital marketing, and
                MS Office solutions. Based in Pakistan, we help businesses build a strong digital presence from
                the ground up, streamline operations, and transform ideas into impactful digital experiences.
                Our team stays ahead of evolving technologies and trends, adapting fast to deliver practical,
                scalable, and growth-oriented solutions for our clients.
            </p>
        </div>
    </section>

    <!-- Services Section (Image 3 Style) -->
    <section id="services" style="background: #1a1a1a; padding: 80px 0; color: #fff;">
        <div class="container">

            <div class="mb-5">
                <p style="color: var(--primary); text-transform: uppercase; font-weight: 700; letter-spacing: 1.5px; font-size: 0.85rem; margin-bottom: 8px;">What we are good at</p>
                <h2 style="color: #fff; font-size: 2.5rem; text-transform: uppercase; font-weight: 800;">
                    Our Professional <span style="color: var(--primary);">Services</span>
                </h2>
                <p class="mt-3" style="color: #fff; max-width: 800px; font-size: 1.05rem; line-height: 1.7;">
                    We deliver end-to-end digital solutions tailored to your business needs.
                    From building powerful websites to creating impactful designs, automations, and intelligent AI systems, our services are designed to drive real growth.
                </p>
            </div>

            <!-- Row 1: 4 Services -->
            <div class="row g-4 mb-4">
                <!-- 1. Development -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('web.development') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/web.webp" alt="Development" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-code fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">Development</h3>
                        <p class="svc-showcase-subtitle">Web & Custom Platforms</p>
                    </a>
                </div>

                <!-- 2. Design -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('graphic.design') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/designing.webp" alt="Design" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-palette fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">Design</h3>
                        <p class="svc-showcase-subtitle">Brand Identity & UI/UX</p>
                    </a>
                </div>

                <!-- 3. Digital Marketing -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('digital.marketing') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/digital-marketing.webp" alt="Digital Marketing" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-bullhorn fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">Digital Marketing</h3>
                        <p class="svc-showcase-subtitle">SEO & Paid Advertising</p>
                    </a>
                </div>

                <!-- 4. Automation -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('automation') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/automation.webp" alt="Automation" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-cogs fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">Automation</h3>
                        <p class="svc-showcase-subtitle">Workflow & RPA Bots</p>
                    </a>
                </div>
            </div>

            <!-- Row 2: 3 Services (Centered) -->
            <div class="row g-4 justify-content-center">
                <!-- 5. SaaS Solutions -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="{{ route('saas') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/saas.webp" alt="SaaS Solutions" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-cloud fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">SaaS Solutions</h3>
                        <p class="svc-showcase-subtitle">Cloud Platforms & Subscriptions</p>
                    </a>
                </div>

                <!-- 6. Data Analytics -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="{{ route('data.analytics') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/data-analytics.webp" alt="Data Analytics" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-chart-line fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">Data Analytics</h3>
                        <p class="svc-showcase-subtitle">BI Dashboards & Pipelines</p>
                    </a>
                </div>

                <!-- 7. AI Engineering -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="{{ route('ai.engineering') }}" class="svc-showcase-card">
                        <div class="svc-icon-wrapper">
                            <img src="/images/ai-engineering.webp" alt="AI Engineering" class="svc-icon-graphic" onerror="this.outerHTML='<i class=\'fas fa-brain fa-3x text-white\'></i>'">
                        </div>
                        <h3 class="svc-showcase-title">AI Engineering</h3>
                        <p class="svc-showcase-subtitle">AI Agents & Custom Models</p>
                    </a>
                </div>
            </div>

            <div class="text-center mt-5 pt-3">
                <a href="{{ route('pricing') }}" class="btn btn-primary"
                    style="padding: 12px 32px; font-weight: 700; border-radius: 6px;">
                    Explore All Services & Pricing <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- Facts Section -->
    <section class="facts-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="section-kicker text-primary">Know some facts about us</p>
                <h2 class="section-title facts-title">SOME NUMBERS</h2>
            </div>

            <div class="facts-grid">
                <div class="fact-card stat-item">
                    <h2 class="fact-value" data-count="200">0</h2>
                    <p class="fact-label">Projects Delivered</p>
                </div>
                <div class="fact-card stat-item">
                    <h2 class="fact-value" data-count="1000">0</h2>
                    <p class="fact-label">Keywords Ranked</p>
                </div>
                <div class="fact-card stat-item">
                    <h2 class="fact-value" data-count="2">0</h2>
                    <p class="fact-label">Years of Experience</p>
                </div>
                <div class="fact-card stat-item">
                    <h2 class="fact-value" data-count="50">0</h2>
                    <p class="fact-label">Websites Delivered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section py-5">
        <div class="container text-center">
            <div class="text-center mb-5">
                <p class="section-kicker text-primary">Know the fields we serve</p>
                <h2 class="section-title industries-title">INDUSTRIES WE WORK WITH</h2>
            </div>
            <p class="section-subtitle" style="max-width: 1000px; margin: 30px auto; font-size: 1.1rem; color: #555;">
                While we love to say we love all of our clients and there is no doubt our portfolio is
                extensive, there are a few industries we have extreme command over. Here are those, if
                you are among them, you know we fit the bill.
            </p>

            <div class="industries-grid mt-4">
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/fashion.jpg" alt="Fashion" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">FASHION</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/food.jpg" alt="Food" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">FOOD</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/retail.jpg" alt="Retail" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">RETAIL</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/technology.jpg" alt="Technology" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">TECHNOLOGY</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/startups.jpg" alt="Startups" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">STARTUPS</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/health.jpg" alt="Healthcare" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">HEALTHCARE</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/hospitality.jpg" alt="Hospitality" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">HOSPITALITY</h4>
                </div>
                <div class="industry-card">
                    <div class="industry-image-wrapper square">
                        <img src="/images/education.jpg" alt="Education" loading="lazy" decoding="async">
                    </div>
                    <h4 class="industry-name">EDUCATION</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 testimonials-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Success Stories</p>
                <h2 class="section-title">WHAT OUR CLIENTS SAY</h2>
                <p class="section-subtitle"
                    style="max-width: 1000px; margin: 30px auto; font-size: 1.1rem; color: #555;">
                    Don't just take our word for it. Here is what some of our global partners have to say about our
                    digital solutions and dedication to growth.
                </p>
            </div>

            <div id="testimonial-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-card"
                        style="background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center; margin: 15px;">
                        <div class="quote-icon mb-3" style="font-size: 2.5rem; color: var(--primary); opacity: 0.3;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text"
                            style="font-size: 1.1rem; color: #555; font-style: italic; line-height: 1.8; margin-bottom: 30px;">
                            "Nexdev Vision transformed our digital presence. Their strategic approach to SEO boosted our
                            organic traffic by 150% in just six months. Highly professional and results-oriented!"
                        </p>
                        <div class="client-info">
                            <img src="/images/testimonial-1.jpg" alt="Client 1"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 15px;">
                            <h4 style="margin-bottom: 5px; font-size: 1.25rem;">Sophia Williams</h4>
                            <p style="color: #888; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                                CEO</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-card"
                        style="background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center; margin: 15px;">
                        <div class="quote-icon mb-3" style="font-size: 2.5rem; color: var(--primary); opacity: 0.3;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text"
                            style="font-size: 1.1rem; color: #555; font-style: italic; line-height: 1.8; margin-bottom: 30px;">
                            "The graphic design work provided for our rebranding was exceptional. They perfectly
                            captured our brand essence and translated it into stunning visuals. A pleasure to work
                            with!"
                        </p>
                        <div class="client-info">
                            <img src="/images/testimonial-2.jpg" alt="Client 2"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 15px;">
                            <h4 style="margin-bottom: 5px; font-size: 1.25rem;">James Anderson</h4>
                            <p style="color: #888; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                                Director</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-card"
                        style="background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center; margin: 15px;">
                        <div class="quote-icon mb-3" style="font-size: 2.5rem; color: var(--primary); opacity: 0.3;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text"
                            style="font-size: 1.1rem; color: #555; font-style: italic; line-height: 1.8; margin-bottom: 30px;">
                            "Their web development team built us a high-performance eCommerce site that is both
                            beautiful and functional. Our conversion rate increased significantly after the launch."
                        </p>
                        <div class="client-info">
                            <img src="/images/testimonial-3.jpg" alt="Client 3"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 15px;">
                            <h4 style="margin-bottom: 5px; font-size: 1.25rem;">Michael Thompson</h4>
                            <p style="color: #888; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                                Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" style="text-transform: uppercase; font-weight: 800; font-size: 2.5rem;">
                Frequently Asked Questions</h2>
            <div class="faq-accordion"
                style="max-width: 800px; margin: 0 auto; border: 1px solid #eee; border-radius: 8px; overflow: hidden;">

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        What core digital solutions does Nexdev Vision provide?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Nexdev Vision is a comprehensive digital agency offering expert services in Web Development,
                        Graphic Design, Digital Marketing (SEO & Social Media), and MS Office Automation. We help
                        businesses build their digital footprint from scratch and optimize existing workflows for better
                        efficiency.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can you handle large-scale, integrated digital projects?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes, our team is equipped to manage cross-functional projects. We often handle everything from
                        brand identity design and custom web development to ongoing digital marketing strategies,
                        ensuring a consistent and powerful brand message across all digital touchpoints.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How does your agency support businesses in scaling globally?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        With over 13 years of experience and a global client base, we understand the nuances of
                        international markets. We use advanced SEO strategies, scalable cloud architectures, and
                        localized marketing insights to help your brand reach and convert audiences worldwide
                        effectively.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How do I start a new project with Nexdev Vision?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        The easiest way is to click the "Get a Quote" button or contact us via our form. We'll set up a
                        initial consultation to understand your requirements, provide a detailed proposal, and map out a
                        successful project timeline tailored to your goals.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-5 final-cta-section">
        <div class="container">
            <div class="final-cta-inner">
                <div>
                    <h2>Build Your Digital <span style="color: var(--primary);">Success Story</span></h2>
                    <p>From custom web solutions to impactful designs, we help you transform your vision into reality.
                        Let's
                        start building today.</p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('contactus') }}" class="btn btn-primary">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
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

            // Testimonial Carousel
            $('#testimonial-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
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
        });
    </script>
</x-layout>