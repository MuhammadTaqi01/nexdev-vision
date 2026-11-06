<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/work.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(10, 15, 30, 0.75); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        Data Intelligence & BI Solutions</p>
                    <h1 class="service-hero-title" style="color: #fff;">Turn Complex Raw Data Into <br class="d-none d-md-inline">
                        <span class="typing-container">
                            <span class="typing-text text-gradient" data-words='["Actionable Revenue Growth", "Live KPI Dashboards", "Predictive Forecasts", "Strategic Clarity"]'>Actionable Revenue Growth</span><span class="typing-cursor">|</span>
                        </span>
                    </h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        Stop guessing and start making strategic decisions grounded in hard facts. We engineer unified data warehouses, real-time KPI dashboards, automated ETL data pipelines, and predictive analytics that uncover hidden growth opportunities.
                    </p>
                    <div class="service-hero-actions">
                        <a href="{{ route('quote') }}" class="btn btn-primary">Request BI Consultation</a>
                        <a href="#services" class="btn btn-outline">Explore Solutions</a>
                    </div>
                </div>
                <div class="service-hero-highlight">
                    <div class="service-hero-metric">
                        <span class="metric-label">Data Points Processed</span>
                        <span class="metric-value">100M+</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Dashboard Latency</span>
                        <span class="metric-value">Real-Time</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Reporting Accuracy</span>
                        <span class="metric-value">100%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What We Deliver</p>
                <h2 class="section-title">Comprehensive Data Analytics Services</h2>
                <p class="section-subtitle">
                    Transforming messy, disconnected data sources into clean, centralized intelligence for leadership teams.
                </p>
            </div>

            <div class="card-grid">
                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Interactive BI Dashboards</h3>
                    <p>
                        Stunning, custom executive dashboards built with Power BI, Tableau, and Looker that summarize financial health, conversion funnels, and KPIs.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data Warehousing & Modeling</h3>
                    <p>
                        Centralize fragmented customer and transaction data into scalable cloud warehouses (Snowflake, BigQuery, PostgreSQL) with optimized schemas.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-random"></i>
                    </div>
                    <h3>Automated ETL Pipelines</h3>
                    <p>
                        Reliable Extract, Transform, Load (ETL) data pipelines that clean, validate, and synchronize records across all operational apps automatically.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Predictive Forecasting</h3>
                    <p>
                        Machine learning statistical models that forecast inventory demand, customer churn probabilities, Lifetime Value (LTV), and seasonal revenue.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Solutions / Pillars -->
    <section class="py-5 recent-projects-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Data Capabilities</p>
                <h2 class="section-title">Built For Deep Strategic Insights</h2>
                <p class="section-subtitle">
                    How data engineering drives higher profitability across your organization.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-funnel-dollar"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Cohort & Funnel Tracking</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Uncover the exact touchpoints where potential customers drop off, pinpoint high-value customer segments, and maximize conversion rates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-filter"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Data Cleansing & Deduplication</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Eliminate duplicate records, reconcile conflicting data formats, and establish a single, trusted source of truth for your entire business.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Automated Executive Briefings</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Scheduled automated PDF reports and Slack summaries sent to executives daily, weekly, or monthly with critical revenue indicators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Process Timeline -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Data Engineering Lifecycle</p>
                <h2 class="section-title text-white">How We Build Your <span style="color: var(--primary);">Intelligence Engine</span></h2>
                <p class="section-subtitle">
                    A structured data methodology ensuring security, accuracy, and maximum strategic clarity.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Discovery -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>KPI Definition & Source Discovery</h3>
                        <p class="text-white">Audit existing databases, CRMs, ad accounts, and define core leadership metrics and reporting requirements.</p>
                    </div>
                </div>

                <!-- Step 2: Architecture -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h3>Data Modeling & Warehouse Setup</h3>
                        <p class="text-white">Designing dimensional star schemas, relational models, and establishing cloud warehouse storage.</p>
                    </div>
                </div>

                <!-- Step 3: ETL Pipeline -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-stream"></i>
                        </div>
                        <h3>Automated ETL Pipeline Engineering</h3>
                        <p class="text-white">Building automated ingestion scripts, data sanitization logic, and transformation jobs that refresh on schedule.</p>
                    </div>
                </div>

                <!-- Step 4: Dashboard Visualization -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-columns"></i>
                        </div>
                        <h3>Dashboard UI/UX & Visualization</h3>
                        <p class="text-white">Crafting intuitive, interactive charts, drill-down filters, and mobile-friendly executive dashboards.</p>
                    </div>
                </div>

                <!-- Step 5: Validation -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h3>Reconciliation & Precision Auditing</h3>
                        <p class="text-white">Cross-validating dashboard metrics with source ledgers and financial statements to guarantee 100% precision.</p>
                    </div>
                </div>

                <!-- Step 6: Training & Evolution -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>Team Handover & Continuous Insights</h3>
                        <p class="text-white">Training your leadership team on self-serve analytics and updating models as your business grows.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 benefits-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Strategic Advantage</p>
                <h2 class="section-title">Uncover Opportunities Hidden in Spreadsheets</h2>
                <p class="section-subtitle">
                    Move beyond static spreadsheets to dynamic analytics that inform every critical business decision.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Single Source of Truth</h3>
                    <p>Eliminate departmental disputes with centralized, reconciled metrics that everyone can trust.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Real-Time Business Visibility</h3>
                    <p>Monitor live sales, margins, marketing spend, and inventory levels in real time from any device.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Predictive Trend Forecasting</h3>
                    <p>Anticipate seasonal demand dips, supply chain shortages, and revenue trends before they impact you.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Higher Marketing ROI</h3>
                    <p>Track true customer acquisition cost (CAC) and multi-touch attribution across all marketing channels.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Strict Data Security & RBAC</h3>
                    <p>Role-based access controls ensure sensitive financial details are only visible to authorized executives.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>No Vendor Lock-In</h3>
                    <p>We build on open, industry-standard modern data stacks that you completely control and own.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Modern Data Stack</p>
                <h2 class="section-title">Industry-Leading <span style="color: var(--primary);">Analytics Tools</span></h2>
                <p class="section-subtitle">
                    Scalable cloud warehouses, high-throughput ETL engines, and world-class visualization suites.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">Microsoft Power BI</div>
                <div class="tech-pill">Tableau</div>
                <div class="tech-pill">Google Looker Studio</div>
                <div class="tech-pill">Snowflake</div>
                <div class="tech-pill">Google BigQuery</div>
                <div class="tech-pill">PostgreSQL</div>
                <div class="tech-pill">Python & Pandas</div>
                <div class="tech-pill">SQL</div>
                <div class="tech-pill">Apache Airflow</div>
                <div class="tech-pill">dbt (data build tool)</div>
                <div class="tech-pill">AWS Redshift</div>
                <div class="tech-pill">Metabase</div>
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
                        What data sources can you connect into our dashboards?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We can connect virtually any source: relational databases (MySQL, PostgreSQL, SQL Server), CRMs (Salesforce, HubSpot), ERP systems, Google/Facebook ad accounts, Shopify, Stripe, Google Sheets, Excel files, and custom REST APIs.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do we need an expensive cloud data warehouse to get started?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Not necessarily. For growing businesses, we often start with cost-effective solutions like managed PostgreSQL or BigQuery on free-tier allocations. As your data volume grows into millions of rows, we seamlessly scale up to enterprise warehouses like Snowflake or Redshift.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can dashboards update automatically in real time?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. We configure scheduled automated refreshes (e.g., hourly, daily) or live direct queries for mission-critical operations such as warehouse logistics and flash-sale monitoring.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How do you ensure the privacy of our proprietary numbers?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        All data pipelines are provisioned inside your organization’s private cloud environment. We sign strict Non-Disclosure Agreements (NDAs), enforce TLS 1.3 encryption, and configure row-level security so users only see the data they are permitted to view.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can you train our in-house team to create their own reports?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes, absolutely. We provide comprehensive documentation, recorded video walkthroughs, and hands-on coaching sessions to empower your team to build ad-hoc queries and customize reports confidently.
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
                    <h2>Ready to unlock the revenue potential <span style="color: var(--primary);">in your data?</span></h2>
                    <p>Share your data challenges with our analytics architects. We’ll outline a clear data roadmap and prototype dashboard plan.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Request a Data Roadmap</a>
                    <a href="mailto:nexdev.vision@gmail.com" class="btn btn-outline service-hero-secondary">Email Your Data Brief</a>
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
