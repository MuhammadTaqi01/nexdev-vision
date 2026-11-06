<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/graphic-design.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        Graphic Design Services</p>
                    <h1 class="service-hero-title" style="color: #fff;">Creative Graphic Designs That Build <br class="d-none d-md-inline">
                        <span class="typing-container">
                            <span class="typing-text text-gradient" data-words='["Strong Brand Identity", "Iconic Brand Logos", "Impactful UI/UX Visuals", "Memorable Print Assets"]'>Strong Brand Identity</span><span class="typing-cursor">|</span>
                        </span>
                    </h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        We craft bold, memorable visuals that make your brand instantly recognizable—online, on print
                        and everywhere in between. From concept to creation, we design with purpose to connect, engage,
                        and leave a lasting impression.
                    </p>
                    <div class="service-hero-actions">
                        <a href="#portfolio" class="btn btn-primary">View Our Designs</a>
                        <a href="{{ route('contactus') }}" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
                <div class="gd-hero-art">
                    <div class="gd-orbit">
                        <span class="gd-pill">Logo</span>
                        <span class="gd-pill">Social Media</span>
                        <span class="gd-pill">Display</span>
                        <span class="gd-pill">Web & App</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What we design</p>
                <h2 class="section-title">Graphic Design Services for Modern Brands</h2>
                <p class="section-subtitle">
                    From brand identity to digital and print design, we create visuals that communicate clearly,
                    look professional, and leave a lasting impression.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Logo & Brand Identity</h3>
                    <p>Distinctive logos and complete brand identity systems that define your brand’s personality and
                        values.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Website & App Design</h3>
                    <p>Clean, modern UI designs for websites and mobile apps focused on usability and visual
                        consistency.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Illustrations</h3>
                    <p>Custom illustrations that add personality, storytelling, and originality to your brand visuals.
                    </p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-hashtag"></i>
                    </div>
                    <h3>Social Media Design</h3>
                    <p>Engaging posts, stories, reels, and ad creatives designed to boost visibility and engagement.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-ad"></i>
                    </div>
                    <h3>Display Designs</h3>
                    <p>Eye-catching banners, billboards, roll-ups, and digital displays that grab attention instantly.
                    </p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3>Packaging & Labels</h3>
                    <p>Creative packaging and label designs that enhance shelf appeal and reflect product quality.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Book Cover & Magazine</h3>
                    <p>Professional cover and layout designs that attract readers and communicate the content
                        effectively.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Clothing & Merchandise</h3>
                    <p>Creative designs for apparel and merchandise that turn your brand into wearable marketing.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Advertising & Marketing</h3>
                    <p>Campaign visuals, ads, and promotional designs that support your marketing goals.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Business Design</h3>
                    <p>Business cards, presentations, proposals, and corporate materials with a professional touch.</p>
                </div>

                <div class="process-step dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Other Designs</h3>
                    <p>Custom graphic design solutions tailored to your unique ideas and business requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Approach (Refined Vertical Timeline) -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Step by Step Process</p>
                <h2 class="section-title text-white">Our Strategy-Driven <span style="color: var(--primary);">Creative
                        Process</span></h2>
                <p class="section-subtitle">
                    Every design decision is backed by research, psychology and iteration—so your visuals don’t just
                    look great, they work.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Research & Discovery -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Research & Discovery</h3>
                        <p class="text-white">We learn about your brand, audience and competitors to uncover insights.
                        </p>
                    </div>
                </div>

                <!-- Step 2: Concept Creation -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Concept Creation</h3>
                        <p class="text-white">Multiple creative routes are explored through moodboards and concepts.</p>
                    </div>
                </div>

                <!-- Step 3: Color Psychology -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Color Psychology</h3>
                        <p class="text-white">We use color theory to select palettes that trigger the right emotions.
                        </p>
                    </div>
                </div>

                <!-- Step 4: Typography & Layout -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-font"></i>
                        </div>
                        <h3>Typography & Layout</h3>
                        <p class="text-white">Careful type pairing and composition ensures your message is readable.</p>
                    </div>
                </div>

                <!-- Step 5: Revisions & Feedback -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3>Revisions & Feedback</h3>
                        <p class="text-white">Collaborative review rounds where we refine designs based on your
                            feedback.</p>
                    </div>
                </div>

                <!-- Step 6: Final Delivery -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h3>Final Delivery</h3>
                        <p class="text-white">You receive production-ready files for web and print in all formats.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview -->
    <section id="portfolio" class="py-5 gd-portfolio">
        <div class="container">
            <div class="section-header text-center mb-4">
                <p class="section-kicker text-primary">Portfolio Showcase</p>
                <h2 class="section-title">A Glimpse of Our Design Work</h2>
                <p class="section-subtitle">
                    Explore our crafted brand visuals across identity, print media, packaging, and digital interfaces.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="design-filter-tabs">
                <button type="button" class="design-tab-btn active" data-filter="all">All</button>
                <button type="button" class="design-tab-btn" data-filter="logos">Logos</button>
                <button type="button" class="design-tab-btn" data-filter="business-cards">Business Cards</button>
                <button type="button" class="design-tab-btn" data-filter="menu-cards">Menu Cards</button>
                <button type="button" class="design-tab-btn" data-filter="brochures">Brochures</button>
                <button type="button" class="design-tab-btn" data-filter="packaging">Packaging</button>
                <button type="button" class="design-tab-btn" data-filter="ui-ux">UI/UX</button>
            </div>

            <!-- Portfolio Grid with Items -->
            <div class="row g-4 justify-content-center" id="design-portfolio-grid">
                <!-- Logo Design: Modern Minimal Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo1.jpeg" data-caption="Modern Minimal Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo1.jpeg" alt="Modern Minimal Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Brand Identity Mark -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo2.jpeg" data-caption="Brand Identity Mark">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo2.jpeg" alt="Brand Identity Mark" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Typography Monogram -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo3.jpeg" data-caption="Typography Monogram">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo3.jpeg" alt="Typography Monogram" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Creative Vector Emblem -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo4.jpeg" data-caption="Creative Vector Emblem">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo4.jpeg" alt="Creative Vector Emblem" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Corporate Brand Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo5.jpeg" data-caption="Corporate Brand Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo5.jpeg" alt="Corporate Brand Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Abstract Tech Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo6.jpeg" data-caption="Abstract Tech Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo6.jpeg" alt="Abstract Tech Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Abstract Tech Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo7.jpeg" data-caption="Abstract Tech Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo7.jpeg" alt="Abstract Tech Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Abstract Tech Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo8.jpeg" data-caption="Abstract Tech Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo8.jpeg" alt="Abstract Tech Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Design: Abstract Tech Logo -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="logos" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/logo9.jpeg" data-caption="Abstract Tech Logo">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Logo Design</span>
                            <img src="/images/portfolios/logo9.jpeg" alt="Abstract Tech Logo" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card: Executive Matte Card -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="business-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/card1.jpeg" data-caption="Executive Matte Card">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Business Card</span>
                            <img src="/images/portfolios/card1.jpeg" alt="Executive Matte Card" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card: Luxury Foil Stamp Card -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="business-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/card2.jpeg" data-caption="Luxury Foil Stamp Card">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Business Card</span>
                            <img src="/images/portfolios/card2.jpeg" alt="Luxury Foil Stamp Card" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card: Minimal Corporate Card -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="business-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/card3.jpeg" data-caption="Minimal Corporate Card">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Business Card</span>
                            <img src="/images/portfolios/card3.jpeg" alt="Minimal Corporate Card" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card: Creative Agency Card -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="business-cards" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/card4.jpeg" data-caption="Creative Agency Card">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Business Card</span>
                            <img src="/images/portfolios/card4.jpeg" alt="Creative Agency Card" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Card: Dual-Tone Premium Card -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="business-cards" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/card5.jpeg" data-caption="Dual-Tone Premium Card">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Business Card</span>
                            <img src="/images/portfolios/card5.jpeg" alt="Dual-Tone Premium Card" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Fine Dining Restaurant Menu -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu1.jpeg" data-caption="Fine Dining Restaurant Menu">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu1.jpeg" alt="Fine Dining Restaurant Menu" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Artisan Cafe Drink Menu -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu2.jpeg" data-caption="Artisan Cafe Drink Menu">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu2.jpeg" alt="Artisan Cafe Drink Menu" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Bistro Table Menu -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu3.jpeg" data-caption="Bistro Table Menu">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu3.jpeg" alt="Bistro Table Menu" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Gourmet Food Catalog -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu4.jpeg" data-caption="Gourmet Food Catalog">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu4.jpeg" alt="Gourmet Food Catalog" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Cocktail & Lounge Menu -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu5.jpeg" data-caption="Cocktail & Lounge Menu">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu5.jpeg" alt="Cocktail & Lounge Menu" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Card: Bakery & Dessert Menu -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="menu-cards" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/menu6.jpeg" data-caption="Bakery & Dessert Menu">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Menu Card</span>
                            <img src="/images/portfolios/menu6.jpeg" alt="Bakery & Dessert Menu" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Tri-Fold Corporate Brochure -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure1.jpeg" data-caption="Tri-Fold Corporate Brochure">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure1.jpeg" alt="Tri-Fold Corporate Brochure" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Company Profile Booklet -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure2.jpeg" data-caption="Company Profile Booklet">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure2.jpeg" alt="Company Profile Booklet" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Service Showcase Fold -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure3.jpeg" data-caption="Service Showcase Fold">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure3.jpeg" alt="Service Showcase Fold" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Marketing Campaign Leaflet -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure4.jpeg" data-caption="Marketing Campaign Leaflet">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure4.jpeg" alt="Marketing Campaign Leaflet" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Executive Presentation Folio -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure5.jpeg" data-caption="Executive Presentation Folio">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure5.jpeg" alt="Executive Presentation Folio" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brochure: Event & Exhibition Flyer -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="brochures" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/brochure6.jpeg" data-caption="Event & Exhibition Flyer">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Brochure</span>
                            <img src="/images/portfolios/brochure6.jpeg" alt="Event & Exhibition Flyer" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Packaging: Luxury Retail Box Packaging -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="packaging" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/packaging1.jpeg" data-caption="Luxury Retail Box Packaging">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Packaging</span>
                            <img src="/images/portfolios/packaging1.jpeg" alt="Luxury Retail Box Packaging" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Packaging: Custom Product Label -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="packaging" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/packaging2.jpeg" data-caption="Custom Product Label">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Packaging</span>
                            <img src="/images/portfolios/packaging2.jpeg" alt="Custom Product Label" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Packaging: Eco-Friendly Pouch Design -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="packaging" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/packaging3.jpeg" data-caption="Eco-Friendly Pouch Design">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Packaging</span>
                            <img src="/images/portfolios/packaging3.jpeg" alt="Eco-Friendly Pouch Design" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Packaging: Cosmetic Bottle Packaging -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="packaging" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/packaging4.jpeg" data-caption="Cosmetic Bottle Packaging">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Packaging</span>
                            <img src="/images/portfolios/packaging4.jpeg" alt="Cosmetic Bottle Packaging" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Packaging: Premium Merchandise Box -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="packaging" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/packaging5.jpeg" data-caption="Premium Merchandise Box">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">Packaging</span>
                            <img src="/images/portfolios/packaging5.jpeg" alt="Premium Merchandise Box" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX: SaaS Analytics Dashboard UI -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="ui-ux" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/ui1.jpeg" data-caption="SaaS Analytics Dashboard UI">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">UI/UX</span>
                            <img src="/images/portfolios/ui1.jpeg" alt="SaaS Analytics Dashboard UI" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX: Mobile App User Flow -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="ui-ux" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/ui2.jpeg" data-caption="Mobile App User Flow">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">UI/UX</span>
                            <img src="/images/portfolios/ui2.jpeg" alt="Mobile App User Flow" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX: Fintech Platform Interface -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="ui-ux" data-in-all="true">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/ui3.jpeg" data-caption="Fintech Platform Interface">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">UI/UX</span>
                            <img src="/images/portfolios/ui3.jpeg" alt="Fintech Platform Interface" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX: E-Commerce Product Experience -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="ui-ux" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/ui4.jpeg" data-caption="E-Commerce Product Experience">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">UI/UX</span>
                            <img src="/images/portfolios/ui4.jpeg" alt="E-Commerce Product Experience" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI/UX: Healthcare App Design System -->
                <div class="col-xl-4 col-lg-4 col-md-6 gd-portfolio-item" data-category="ui-ux" data-in-all="false" style="display: none;">
                    <div class="gd-portfolio-card" data-src="/images/portfolios/ui5.jpeg" data-caption="Healthcare App Design System">
                        <div class="gd-portfolio-img-box">
                            <span class="gd-portfolio-badge">UI/UX</span>
                            <img src="/images/portfolios/ui5.jpeg" alt="Healthcare App Design System" loading="lazy">
                            <div class="gd-portfolio-overlay">
                                <div class="gd-portfolio-zoom-btn">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Design Portfolio Lightbox Modal -->
    <div id="designModal" class="gd-lightbox-modal" aria-hidden="true" style="display: none;">
        <div class="gd-lightbox-backdrop"></div>
        <div class="gd-lightbox-container">
            <button type="button" class="gd-lightbox-close" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <button type="button" class="gd-lightbox-arrow prev" aria-label="Previous image">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="gd-lightbox-img-wrapper">
                <img id="gdModalImg" src="" alt="Design Preview">
                <div id="gdModalCaption" class="gd-lightbox-caption"></div>
            </div>
            <button type="button" class="gd-lightbox-arrow next" aria-label="Next image">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>


    <!-- Tools & Software -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Tools we use</p>
                <h2 class="section-title">Industry-Standard <span style="color: var(--primary);">Design Software</span>
                </h2>
                <p class="section-subtitle">
                    Our designers combine creativity with powerful tools to produce pixel-perfect visuals for every
                    platform.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">Adobe Photoshop</div>
                <div class="tech-pill">Adobe Illustrator</div>
                <div class="tech-pill">Adobe InDesign</div>
                <div class="tech-pill">Figma</div>
                <div class="tech-pill">Canva</div>
                <div class="tech-pill">XD / Prototyping</div>
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
                        What services do you offer?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Common services include logo design, branding, social media graphics, posters, flyers, business
                        cards, presentations, and basic web graphics.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How long does a design project take?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Project timelines vary. Simple designs may take 1–3 days, while larger projects like branding
                        can take 1–2 weeks depending on complexity and revisions.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How many revisions are included?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Most projects include 2–3 rounds of revisions. Additional revisions can be requested if needed.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        What information do you need to start a project?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Usually: project details, preferred style or colors, text content, logo (if available), target
                        audience, and deadline.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        What file formats will I receive?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        You may receive files such as JPG, PNG, PDF, or source files like PSD or AI, depending on the
                        project.
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
                    <h2>Ready to elevate your brand <span style="color: var(--primary);">with standout visuals?</span>
                    </h2>
                    <p>Let’s create a design system that tells your story, connects with your audience and grows your
                        business.</p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('contactus') }}" class="btn btn-primary">Start a Design Project</a>
                    <a href="mailto:nexdev.vision@gmail.com" class="btn btn-outline service-hero-secondary">Share Your
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

            // Portfolio Filter Tabs Logic
            const designFilterBtns = document.querySelectorAll('.design-tab-btn');
            const designPortfolioItems = document.querySelectorAll('.gd-portfolio-item');

            designFilterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    designFilterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const selectedFilter = this.getAttribute('data-filter');

                    designPortfolioItems.forEach(item => {
                        const itemCategory = item.getAttribute('data-category');
                        const inAll = item.getAttribute('data-in-all') === 'true';

                        let shouldDisplay = false;
                        if (selectedFilter === 'all') {
                            // Show exactly 3 designs per category in All
                            shouldDisplay = inAll;
                        } else {
                            // Show all designs of selected category
                            shouldDisplay = (itemCategory === selectedFilter);
                        }

                        if (shouldDisplay) {
                            item.style.display = '';
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                item.style.transition = 'all 0.35s ease';
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 30);
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Lightbox Modal Logic
            const modal = document.getElementById('designModal');
            const modalImg = document.getElementById('gdModalImg');
            const modalCaption = document.getElementById('gdModalCaption');
            const closeBtn = document.querySelector('.gd-lightbox-close');
            const backdrop = document.querySelector('.gd-lightbox-backdrop');
            const prevBtn = document.querySelector('.gd-lightbox-arrow.prev');
            const nextBtn = document.querySelector('.gd-lightbox-arrow.next');

            let currentIndex = -1;

            function getActiveCards() {
                return Array.from(document.querySelectorAll('.gd-portfolio-item'))
                    .filter(item => item.style.display !== 'none')
                    .map(item => item.querySelector('.gd-portfolio-card'));
            }

            function openLightbox(index) {
                const cards = getActiveCards();
                if (index < 0 || index >= cards.length) return;
                currentIndex = index;
                const card = cards[currentIndex];
                const src = card.getAttribute('data-src');
                const caption = card.getAttribute('data-caption') || '';

                modalImg.src = src;
                modalCaption.textContent = caption;
                modal.classList.add('is-open');
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                modal.classList.remove('is-open');
                setTimeout(() => {
                    if (!modal.classList.contains('is-open')) {
                        modal.style.display = 'none';
                    }
                }, 300);
                document.body.style.overflow = '';
            }

            function showPrevImg() {
                const cards = getActiveCards();
                if (cards.length === 0) return;
                currentIndex = (currentIndex - 1 + cards.length) % cards.length;
                openLightbox(currentIndex);
            }

            function showNextImg() {
                const cards = getActiveCards();
                if (cards.length === 0) return;
                currentIndex = (currentIndex + 1) % cards.length;
                openLightbox(currentIndex);
            }

            document.querySelectorAll('.gd-portfolio-card').forEach(card => {
                card.addEventListener('click', function () {
                    const cards = getActiveCards();
                    const idx = cards.indexOf(this);
                    if (idx !== -1) {
                        openLightbox(idx);
                    }
                });
            });

            if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
            if (backdrop) backdrop.addEventListener('click', closeLightbox);
            if (prevBtn) prevBtn.addEventListener('click', (e) => { e.stopPropagation(); showPrevImg(); });
            if (nextBtn) nextBtn.addEventListener('click', (e) => { e.stopPropagation(); showNextImg(); });

            document.addEventListener('keydown', function (e) {
                if (!modal || !modal.classList.contains('is-open')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') showPrevImg();
                if (e.key === 'ArrowRight') showNextImg();
            });
        });
    </script>
</x-layout>