<x-layout>
    <!-- About Hero -->
    <section class="hero-section" style="height: 100vh; position: relative; overflow: hidden;">
        <div
            style="position: absolute; inset: 0; background-image: url('/images/about-us.jpg'); background-size: cover; background-position: center; opacity: 0.8; z-index: 0;">
        </div>
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="hero-content text-center"
            style="position: relative; z-index: 2; max-width: 900px; padding-top: 100px; margin: auto;">
            <p class="badge-pill"
                style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                Our Legacy
            </p>
            <h1 class="service-hero-title" style="color: #fff;">
                Empowering Visions <span style="color: var(--primary);">Globally</span>
            </h1>
            <p style="color: #eee;">
                At Nexdev Vision, we don't just build digital solutions; we craft experiences that drive global growth
                and define industry standards.
            </p>
            <!-- CTA Button -->
            <a href="{{ route('nvlanding') }}#services" class="cta-button"
                style="display: inline-block; margin-top: 20px; padding: 12px 24px; background-color: var(--primary); color: #fff; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s;">
                Discover Our Services
            </a>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div>
                        <img src="/images/journey.jpg" alt="Our Story" style="width: 100%; border-radius: 12px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="section-kicker text-primary">Discover Our Journey</p>
                    <h2 class="section-title" style="margin-bottom: 30px;">THE STORY OF NEXDEV VISION</h2>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 25px;">
                        Founded over a decade ago, Nexdev Vision began with a simple mission: to bridge the gap between
                        complex technology and business growth. Based in Pakistan and serving a global clientele, we
                        have evolved into a full-service digital agency.
                    </p>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 25px;">
                        Our journey has been defined by innovation and a relentless commitment to our clients' success.
                        From the early days of web development to today's complex ecosystem of digital marketing and
                        automated solutions, we've stayed ahead of the curve, ensuring our partners always have a
                        competitive edge.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-5" style="background: #0b0f19;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 12px; height: 100%;">
                        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 20px;">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 style="font-weight: 800; margin-bottom: 20px;" class="text-white">OUR MISSION</h3>
                        <p style="color: #ffffffff; line-height: 1.7;">To deliver high-impact digital solutions that
                            empower
                            businesses to scale, innovate, and dominate their respective markets through strategic
                            creativity and technical excellence.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 12px; height: 100%;">
                        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 20px;">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 style="font-weight: 800; margin-bottom: 20px;" class="text-white">OUR VISION</h3>
                        <p style="color: #ffffffff; line-height: 1.7;">To be the global benchmark for digital
                            transformation,
                            recognized for our ability to turn ambitious visions into tangible digital realities that
                            inspire and perform.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 12px; height: 100%;">
                        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 20px;">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3 style="font-weight: 800; margin-bottom: 20px;" class="text-white">OUR VALUES</h3>
                        <ul style="list-style: none; padding: 0; color: #ffffffff;">
                            <li style="margin-bottom: 10px;"><i class="fas fa-star"
                                    style="color: var(--primary); margin-right: 10px;"></i> Integrity First</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-star"
                                    style="color: var(--primary); margin-right: 10px;"></i> Constant Innovation</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-star"
                                    style="color: var(--primary); margin-right: 10px;"></i> Client Success Obsession
                            </li>
                            <li><i class="fas fa-star" style="color: var(--primary); margin-right: 10px;"></i> Technical
                                Excellence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us (Alternative) -->
    <section class="py-5" style="background: #fdfdfd;">
        <div class="container">
            <div class="text-center mb-5">
                <p class="section-kicker text-primary">Why Choose Us</p>
                <h2 class="section-title">THE NEXDEV ADVANTAGE</h2>
            </div>
            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Experience</h3>
                    <p>Over 13 years of navigating the digital landscape.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Expertise</h3>
                    <p>Multi-disciplinary team of creators and engineers.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Results</h3>
                    <p>Proven track record of ROI-driven digital growth.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Support</h3>
                    <p>Dedicated support and long-term partnership.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global CTA -->
    <section class="py-5 final-cta-section">
        <div class="container">
            <div class="final-cta-inner">
                <div>
                    <h2>Ready to build your <span style="color: var(--primary);">success story?</span></h2>
                    <p>Let's combine our 13+ years of experience with your vision to create something extraordinary.</p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('contactus') }}" class="btn btn-primary">Start Your Project</a>
                    <a href="{{ route('quote') }}" class="btn btn-outline service-hero-secondary">Get a Free Quote</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>