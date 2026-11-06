<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/technology.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(10, 15, 30, 0.75); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        Intelligent Workflow Automation</p>
                    <h1 class="service-hero-title" style="color: #fff;">Smart Business Automation That <br class="d-none d-md-inline">
                        <span class="typing-container">
                            <span class="typing-text text-gradient" data-words='["Eliminates Repetitive Work", "Connects Your APIs", "Runs 24/7 Unattended", "Saves 1000s of Hours"]'>Eliminates Repetitive Work</span><span class="typing-cursor">|</span>
                        </span>
                    </h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        Supercharge your team's operational velocity. We design and deploy custom business process automations (BPA), robotic process automations (RPA), API integrations, and data synchronization pipelines that run smoothly 24/7 without human error.
                    </p>
                    <div class="service-hero-actions">
                        <a href="{{ route('quote') }}" class="btn btn-primary">Get Automation Audit</a>
                        <a href="#services" class="btn btn-outline">Explore Automations</a>
                    </div>
                </div>
                <div class="service-hero-highlight">
                    <div class="service-hero-metric">
                        <span class="metric-label">Hours Saved</span>
                        <span class="metric-value">10,000+</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Execution Time</span>
                        <span class="metric-value">24/7/365</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Error Reduction</span>
                        <span class="metric-value">99.8%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What We Automate</p>
                <h2 class="section-title">End-to-End Enterprise Automation Services</h2>
                <p class="section-subtitle">
                    Transform manual bottlenecks into lightning-fast automated digital pipelines across your tools, databases, and teams.
                </p>
            </div>

            <div class="card-grid">
                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Business Process Automation</h3>
                    <p>
                        Streamline complex multi-step approvals, cross-departmental handoffs, and customer journeys into unified, self-executing digital workflows.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>API & Webhook Integration</h3>
                    <p>
                        Seamlessly connect disparate cloud software (Salesforce, HubSpot, Slack, Shopify, ERPs) using secure custom webhooks and RESTful bridges.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Robotic Process Automation</h3>
                    <p>
                        Deploy smart software bots to interact with legacy portals, scrape data, autofill complex web forms, and execute rule-based tasks unattended.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Document & Invoice Parsing</h3>
                    <p>
                        Automated OCR extraction from PDFs, receipt processing, inventory updates, and automatic synchronization with your accounting software.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Solutions / Pillars -->
    <section class="py-5 recent-projects-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Key Automation Pillars</p>
                <h2 class="section-title">Engineered For Zero Faults & Maximum ROI</h2>
                <p class="section-subtitle">
                    How automated systems revolutionize day-to-day enterprise operations.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Bi-Directional CRM & ERP Sync</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Keep leads, customer orders, inventory stock, and payment records perfectly synchronized in real time without dual-entry friction.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Instant Alerting & Escalation</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Trigger instant notifications to Slack, Microsoft Teams, SMS, or WhatsApp whenever critical events, VIP orders, or anomalies occur.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Automated Error Retry & Logs</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Built-in exponential backoff, dead-letter queues, detailed audit logs, and self-healing logic ensure zero data loss during network hiccups.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Process Timeline -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Automation Lifecycle</p>
                <h2 class="section-title text-white">How We Deploy <span style="color: var(--primary);">Autonomous Systems</span></h2>
                <p class="section-subtitle">
                    A thorough implementation methodology focused on identifying high-impact bottlenecks and deploying reliable pipelines.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Discovery -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-search-plus"></i>
                        </div>
                        <h3>Workflow Audit & Opportunity Mapping</h3>
                        <p class="text-white">Mapping your team’s manual steps, measuring time spent, and identifying high-ROI automation opportunities.</p>
                    </div>
                </div>

                <!-- Step 2: Architecture -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h3>Architecture & Data Flow Blueprint</h3>
                        <p class="text-white">Designing trigger events, fallback protocols, data transformations, and security parameters across all systems.</p>
                    </div>
                </div>

                <!-- Step 3: Scripting -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <h3>Scripting & Integration Development</h3>
                        <p class="text-white">Developing custom Python/Node automation scripts, webhooks, and enterprise integration connectors.</p>
                    </div>
                </div>

                <!-- Step 4: Sandbox Simulation -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h3>Sandbox Testing & Edge Case Checks</h3>
                        <p class="text-white">Testing with historical data, invalid inputs, API timeout simulations, and duplicate transaction prevention.</p>
                    </div>
                </div>

                <!-- Step 5: Live Rollout -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Production Deployment & Verification</h3>
                        <p class="text-white">Switching live production triggers on, with real-time telemetry monitoring and team handover sessions.</p>
                    </div>
                </div>

                <!-- Step 6: Monitoring -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Continuous Monitoring & SLA Support</h3>
                        <p class="text-white">Continuous health monitoring, automated error notifications, and proactive updates as third-party APIs evolve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 benefits-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Why Choose Us</p>
                <h2 class="section-title">Measurable Gains in Speed, Precision, & Profit</h2>
                <p class="section-subtitle">
                    Free your best team members from tedious manual data entry so they can focus on high-value business growth.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>10x Processing Speed</h3>
                    <p>Tasks that took hours are completed in milliseconds automatically the moment a trigger event occurs.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Zero Human Error</h3>
                    <p>Eliminate typos, misfiled documents, duplicated orders, and costly discrepancies with strict validation rules.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>24/7/365 Nonstop Operation</h3>
                    <p>Your business logic runs around the clock—processing orders, syncing leads, and sending confirmations while you sleep.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Massive Cost Reduction</h3>
                    <p>Significantly lower overhead costs by scaling operations without needing to hire massive data-entry teams.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Comprehensive Audit Logs</h3>
                    <p>Every single step, execution timestamp, payload, and response is recorded for complete transparency and compliance.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Custom Tailored Logic</h3>
                    <p>We build solutions that bend around your exact business rules, not rigid off-the-shelf templates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Automation Stack</p>
                <h2 class="section-title">State-of-the-Art <span style="color: var(--primary);">Integration Tools</span></h2>
                <p class="section-subtitle">
                    Combining industry-standard workflow engines with custom code to create unbreakable automations.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">Python</div>
                <div class="tech-pill">Node.js</div>
                <div class="tech-pill">n8n</div>
                <div class="tech-pill">Zapier</div>
                <div class="tech-pill">Make (Integromat)</div>
                <div class="tech-pill">Selenium</div>
                <div class="tech-pill">Playwright</div>
                <div class="tech-pill">REST Webhooks</div>
                <div class="tech-pill">AWS Lambda</div>
                <div class="tech-pill">Redis Celery</div>
                <div class="tech-pill">Excel VBA / Macros</div>
                <div class="tech-pill">Postman</div>
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
                        What typical workflows can you automate for our company?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Virtually any repetitive task: syncing e-commerce orders into ERPs, scraping vendor pricing catalogs, processing and extracting invoice data, routing sales leads to reps with automated notifications, sending contract updates, generating monthly Excel reports, and customer onboarding emails.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can you connect software that doesn't have an official API?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. When legacy platforms or desktop tools lack APIs, we use Robotic Process Automation (RPA) and headless browser automation (Playwright/Selenium) to interact with user interfaces, download reports, submit forms, and extract records safely.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        What happens if a third-party server or API goes down?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Our automations incorporate resilient error-handling logic: failed payloads are placed into retry queues with exponential backoff. If an endpoint remains unreachable, automated alerts notify both our engineers and your administrator while preserving your data queue.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How soon will we see a return on investment (ROI)?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Most clients achieve full payback within 4 to 8 weeks through immediate labor hour savings, reduced data-entry errors, faster order turnaround times, and increased customer satisfaction.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Is our data encrypted and secure during automated transit?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Always. All data in transit is encrypted using modern SSL/TLS 1.3 standards. Authentication secrets and API keys are stored in secure environment vaults (e.g., AWS Secrets Manager) and never hardcoded.
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
                    <h2>Ready to eliminate manual busywork and <span style="color: var(--primary);">scale operations?</span></h2>
                    <p>Request a complimentary automation audit. We’ll analyze your workflow and calculate exact time and dollar savings.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Book an Automation Audit</a>
                    <a href="mailto:nexdev.vision@gmail.com" class="btn btn-outline service-hero-secondary">Email Your Workflow</a>
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
