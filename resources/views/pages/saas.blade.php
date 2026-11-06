<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/startups.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(10, 15, 30, 0.75); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        SaaS Engineering & Cloud Solutions</p>
                    <h1 class="service-hero-title" style="color: #fff;">Scalable SaaS Solutions That <br class="d-none d-md-inline">
                        <span class="typing-container">
                            <span class="typing-text text-gradient" data-words='["Drive Recurring Revenue", "Scale Multi-Tenants", "Automate Billing", "Retain Customers"]'>Drive Recurring Revenue</span><span class="typing-cursor">|</span>
                        </span>
                    </h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        We architect, build, and scale multi-tenant Software-as-a-Service (SaaS) platforms built for speed, security, and exponential growth. From validating MVPs to enterprise-grade cloud systems with seamless subscription billing and high availability.
                    </p>
                    <div class="service-hero-actions">
                        <a href="{{ route('quote') }}" class="btn btn-primary">Launch Your SaaS</a>
                        <a href="#services" class="btn btn-outline">Explore Capabilities</a>
                    </div>
                </div>
                <div class="service-hero-highlight">
                    <div class="service-hero-metric">
                        <span class="metric-label">Uptime Reliability</span>
                        <span class="metric-value">99.99%</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Billing Integration</span>
                        <span class="metric-value">Automated</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Architecture</span>
                        <span class="metric-value">Multi-Tenant</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What We Build</p>
                <h2 class="section-title">End-to-End SaaS Development Solutions</h2>
                <p class="section-subtitle">
                    Every SaaS requires more than just clean code—it demands bulletproof multi-tenancy, automated billing, and rock-solid infrastructure.
                </p>
            </div>

            <div class="card-grid">
                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Multi-Tenant Architecture</h3>
                    <p>
                        High-security tenant isolation with shared or separate database schemas ensuring zero cross-tenant data leaks and effortless horizontal scaling.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Billing & Subscriptions</h3>
                    <p>
                        Complete integration of Stripe, Paddle, and LemonSqueezy with automated prorations, tiered subscription logic, invoices, and payment webhooks.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Authentication & RBAC</h3>
                    <p>
                        Enterprise single sign-on (SSO), OAuth, multi-factor authentication (MFA), and fine-grained Role-Based Access Control for teams and organizations.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>REST & GraphQL APIs</h3>
                    <p>
                        Comprehensive API-first architectures enabling programmatic developer access, external integrations, webhooks, and third-party developer ecosystems.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core SaaS Capabilities -->
    <section class="py-5 recent-projects-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Production Pillars</p>
                <h2 class="section-title">Engineered For Enterprise Scale</h2>
                <p class="section-subtitle">
                    Key features baked directly into every SaaS product we deliver.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Super Admin & Analytics</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Comprehensive centralized dashboard to track MRR, churn, user cohorts, active sessions, and tenant-level resource utilization in real time.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Cloud Native DevOps</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Automated CI/CD pipelines, containerized Docker deployments, AWS/GCP auto-scaling clusters, and Redis caching for sub-second latency.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Team & Workspace Invites</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Frictionless user onboarding, seat-based billing tiers, organization workspace switching, and automated email invitations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Process Timeline -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">SaaS Development Lifecycle</p>
                <h2 class="section-title text-white">How We Turn Ideas Into <span style="color: var(--primary);">Thriving Platforms</span></h2>
                <p class="section-subtitle">
                    A rigorous sprint-based process designed to derisk development, iterate rapidly, and achieve product-market fit.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Strategy -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Product Blueprint & Architecture</h3>
                        <p class="text-white">Defining tenant isolation strategies, database models, user workflows, and MVP scope to optimize speed to market.</p>
                    </div>
                </div>

                <!-- Step 2: UI/UX Prototyping -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>SaaS UI/UX Design</h3>
                        <p class="text-white">Designing intuitive workspaces, interactive dashboards, and streamlined onboarding flows that reduce churn.</p>
                    </div>
                </div>

                <!-- Step 3: Core Development -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Full-Stack SaaS Development</h3>
                        <p class="text-white">Coding clean, modular frontend interfaces and high-throughput backend services integrated with billing gateways.</p>
                    </div>
                </div>

                <!-- Step 4: Testing & Security -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3>Security Audits & Load Testing</h3>
                        <p class="text-white">Rigorous pen testing, vulnerability checks, cross-tenant isolation validation, and high-concurrency stress testing.</p>
                    </div>
                </div>

                <!-- Step 5: Production Launch -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Cloud Deployment & Go-Live</h3>
                        <p class="text-white">Zero-downtime deployment to AWS/GCP clusters with automated backups, monitoring alerts, and CDN caching.</p>
                    </div>
                </div>

                <!-- Step 6: Scale & Support -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Continuous Feature Scaling</h3>
                        <p class="text-white">Iterating features based on user telemetry, subscription analytics, and scaling server infrastructure on demand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 benefits-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Why Partner With Us</p>
                <h2 class="section-title">Built For Maximum Retention and Scalability</h2>
                <p class="section-subtitle">
                    We architect your platform from day one to handle exponential user growth without breaking.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Fast Time to Market</h3>
                    <p>Launch your MVP in weeks instead of months using proven SaaS boilerplates and modular code.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Predictable Recurring Revenue</h3>
                    <p>Automate subscription payments, invoices, trial expirations, and dunning management effortlessly.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Bank-Grade Security</h3>
                    <p>End-to-end data encryption, strict RBAC protocols, automated backups, and compliance-ready code.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Elastic Auto-Scaling</h3>
                    <p>Cloud architecture designed to seamlessly handle sudden viral traffic spikes without performance dips.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>100% IP Ownership</h3>
                    <p>You own all proprietary intellectual property, source code, repositories, and cloud credentials.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Dedicated Post-Launch Support</h3>
                    <p>Active DevOps maintenance, continuous security patching, and on-call engineering SLA support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Technology Stack</p>
                <h2 class="section-title">Enterprise Tech For <span style="color: var(--primary);">High-Velocity SaaS</span></h2>
                <p class="section-subtitle">
                    Battle-tested, modern technologies selected for resilience, security, and developer productivity.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">Laravel</div>
                <div class="tech-pill">React.js</div>
                <div class="tech-pill">Vue.js</div>
                <div class="tech-pill">Node.js</div>
                <div class="tech-pill">PostgreSQL</div>
                <div class="tech-pill">MySQL</div>
                <div class="tech-pill">Redis</div>
                <div class="tech-pill">Docker</div>
                <div class="tech-pill">AWS Cloud</div>
                <div class="tech-pill">Stripe API</div>
                <div class="tech-pill">GraphQL</div>
                <div class="tech-pill">Tailwind CSS</div>
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
                        What is multi-tenancy and why is it important for SaaS?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Multi-tenancy allows a single instance of your software to serve multiple customer organizations (tenants) while ensuring complete data isolation, security, and separate tenant branding. This keeps operational and hosting costs dramatically lower than running isolated apps for each client.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can you integrate recurring subscription billing gateways?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. We build end-to-end billing workflows with Stripe Billing, Paddle, and LemonSqueezy, including free trials, tiered feature plans, usage-based metered billing, automated invoice generation, and credit card renewal retries.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How long does it take to develop a functional SaaS MVP?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        A focused SaaS MVP typically takes 6 to 10 weeks depending on feature complexity. We structure the project in 2-week agile sprints, so you can test working software, onboard alpha users, and collect feedback early.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do I retain full ownership of the source code?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes, 100%. Upon project completion, all source code, database architectures, documentation, and cloud deployment scripts are transferred fully to your organization with zero vendor lock-in.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How do you guarantee data security and compliance?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We implement industry-standard encryption at rest and in transit (SSL/TLS, AES-256), strict SQL injection protections, CSRF token defenses, automated daily database backups, and fine-grained audit logging.
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
                    <h2>Ready to build a SaaS platform that <span style="color: var(--primary);">generates recurring value?</span></h2>
                    <p>Discuss your vision with our senior cloud engineers. We’ll provide technical architecture, timelines, and estimation without obligation.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Request a Proposal</a>
                    <a href="mailto:nexdev.vision@gmail.com" class="btn btn-outline service-hero-secondary">Email Your Specs</a>
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
