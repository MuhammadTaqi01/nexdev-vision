<x-layout>
    <!-- Pricing Hero -->
    <section class="service-hero" style="background: url('/images/pricing.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.65); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Transparent Pricing</p>
                <h1 class="service-hero-title" style="color: #fff;">Plans that fit <br class="d-none d-md-inline">
                    <span class="typing-container">
                        <span class="typing-text" data-words='["Every Growth Stage", "Startups & MVPs", "Scaling Businesses", "Enterprise Teams"]'>Every Growth Stage</span><span class="typing-cursor">|</span>
                    </span>
                </h1>
                <p style="color: #eee; font-size: 1.15rem; max-width: 780px; margin: 15px auto 0; line-height: 1.7;">
                    Flexible, transparent pricing for startups, growing brands, and enterprises. Choose a service plan below or request a custom quote tailored to your exact roadmap.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Tiers Section -->
    <section class="py-5" style="background:#fff;">
        <div class="container">
            <div style="text-align:center; margin-bottom: 35px;">
                <p class="section-kicker" style="color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; margin-bottom: 6px;">Simple & Transparent</p>
                <h2 class="section-title">Select Your Service & Choose A Plan</h2>
                <p class="section-subtitle" style="color:#64748b; max-width:800px; margin:8px auto; font-size: 1.05rem;">
                    All plans include a dedicated project manager, milestone-based delivery, quality assurance, and post-launch warranty support.
                </p>

                <!-- Desktop Category Filter Tabs -->
                <div class="pricing-tabs d-none d-md-flex justify-content-center flex-wrap gap-2 mt-4">
                    <button type="button" class="pricing-tab-btn active" data-target="web-dev" onclick="switchCategory('web-dev', this)">Web Development</button>
                    <button type="button" class="pricing-tab-btn" data-target="graphic-design" onclick="switchCategory('graphic-design', this)">Design</button>
                    <button type="button" class="pricing-tab-btn" data-target="digital-marketing" onclick="switchCategory('digital-marketing', this)">Digital Marketing</button>
                    <button type="button" class="pricing-tab-btn" data-target="automation" onclick="switchCategory('automation', this)">Automation</button>
                    <button type="button" class="pricing-tab-btn" data-target="saas" onclick="switchCategory('saas', this)">SaaS Solutions</button>
                    <button type="button" class="pricing-tab-btn" data-target="data-analytics" onclick="switchCategory('data-analytics', this)">Data Analytics</button>
                    <button type="button" class="pricing-tab-btn" data-target="ai-engineering" onclick="switchCategory('ai-engineering', this)">AI Engineering</button>
                </div>

                <!-- Mobile Dropdown Selector -->
                <div class="d-md-none text-center mt-3">
                    <label for="pricingCategory" class="fw-bold mb-2 text-dark">Select Service:</label>
                    <select id="pricingCategory" onchange="switchCategory(this.value)" class="form-select mx-auto"
                        style="max-width: 320px; border: 2px solid var(--primary); font-weight: 600; padding: 10px 14px;">
                        <option value="web-dev" selected>Web Development</option>
                        <option value="graphic-design">Graphic Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="automation">Automation</option>
                        <option value="saas">SaaS Solutions</option>
                        <option value="data-analytics">Data Analytics</option>
                        <option value="ai-engineering">AI Engineering</option>
                    </select>
                </div>
            </div>

            <div id="pricing-container">
                <!-- 1. Web Development -->
                <div id="web-dev" class="pricing-group"
                    style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Starter MVP</h3>
                            <p class="plan-desc">For small websites, landing pages and MVPs</p>
                            <div class="plan-price">$499</div>
                            <div class="plan-period">One-time payment</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Custom High-Converting Landing Page</li>
                            <li><i class="fas fa-check-circle"></i> Mobile-First Responsive Design</li>
                            <li><i class="fas fa-check-circle"></i> On-Page Technical SEO Foundations</li>
                            <li><i class="fas fa-check-circle"></i> Contact Form & Lead Capture</li>
                            <li><i class="fas fa-check-circle"></i> 30 Days Free Post-Launch Support</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Get Started</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Growth Web App</h3>
                            <p class="plan-desc">For established brands and dynamic portals</p>
                            <div class="plan-price">$1,499</div>
                            <div class="plan-period">One-time or milestone-based</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Complete Custom Website (Up to 10 Pages)</li>
                            <li><i class="fas fa-check-circle"></i> Headless CMS / Laravel Admin Panel</li>
                            <li><i class="fas fa-check-circle"></i> Speed & Core Web Vitals Optimization</li>
                            <li><i class="fas fa-check-circle"></i> Custom API & CRM Integrations</li>
                            <li><i class="fas fa-check-circle"></i> 90 Days Maintenance & Warranty</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Start Project</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Enterprise Platform</h3>
                            <p class="plan-desc">High-concurrency platforms & web applications</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Scope-based proposal</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Bespoke Microservice Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Full E-Commerce / Multi-Vendor Hub</li>
                            <li><i class="fas fa-check-circle"></i> High-Traffic AWS / Docker Infrastructure</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Senior Engineering Team</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 SLA Uptime Guarantee</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Request Proposal</a>
                    </div>
                </div>

                <!-- 2. Graphic Design -->
                <div id="graphic-design" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Logo Pro</h3>
                            <p class="plan-desc">Essential visual identity for startups</p>
                            <div class="plan-price">$199</div>
                            <div class="plan-period">One-time payment</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> 3 Unique Original Logo Concepts</li>
                            <li><i class="fas fa-check-circle"></i> Vector AI, EPS, SVG, PNG Formats</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Profile Kit & Favicon</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Rounds of Revisions</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Select Plan</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Brand Identity Suite</h3>
                            <p class="plan-desc">Complete corporate branding system</p>
                            <div class="plan-price">$599</div>
                            <div class="plan-period">One-time payment</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Premium Logo Suite (Primary & Secondary)</li>
                            <li><i class="fas fa-check-circle"></i> Full Brand Guidelines & Typography Book</li>
                            <li><i class="fas fa-check-circle"></i> Business Stationery (Cards, Letterheads)</li>
                            <li><i class="fas fa-check-circle"></i> Marketing Collateral (Banners, Flyers)</li>
                            <li><i class="fas fa-check-circle"></i> 100% Commercial Copyright Ownership</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Order Brand Suite</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Product UI/UX</h3>
                            <p class="plan-desc">User-tested Figma design systems</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Quote based on screens</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> User Journey Mapping & Wireframing</li>
                            <li><i class="fas fa-check-circle"></i> High-Fidelity Interactive Prototypes</li>
                            <li><i class="fas fa-check-circle"></i> Complete Figma Design Token System</li>
                            <li><i class="fas fa-check-circle"></i> Usability Testing & Dev Handoff</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Consult With Designer</a>
                    </div>
                </div>

                <!-- 3. Digital Marketing -->
                <div id="digital-marketing" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Social Boost</h3>
                            <p class="plan-desc">Social growth & presence management</p>
                            <div class="plan-price">$299</div>
                            <div class="plan-period">Per Month</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> 3 Social Channels Managed</li>
                            <li><i class="fas fa-check-circle"></i> 12 High-Engagement Custom Creatives</li>
                            <li><i class="fas fa-check-circle"></i> Targeted Hashtags & Copywriting</li>
                            <li><i class="fas fa-check-circle"></i> Monthly Growth & Analytics Report</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Subscribe</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Growth Funnel</h3>
                            <p class="plan-desc">Multi-channel traffic & customer acquisition</p>
                            <div class="plan-price">$899</div>
                            <div class="plan-period">Per Month</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Advanced On-Page & Technical SEO</li>
                            <li><i class="fas fa-check-circle"></i> Google Ads & Meta Ads Funnel Strategy</li>
                            <li><i class="fas fa-check-circle"></i> High-Converting Landing Page Copy</li>
                            <li><i class="fas fa-check-circle"></i> Conversion Rate Optimization (CRO)</li>
                            <li><i class="fas fa-check-circle"></i> Weekly Performance Review & Dashboards</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Accelerate Growth</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Omnichannel 360°</h3>
                            <p class="plan-desc">Full-scale brand domination campaigns</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Tailored retainer</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Dedicated Chief Marketing Officer / Lead</li>
                            <li><i class="fas fa-check-circle"></i> Omnichannel Programmatic Ad Buys</li>
                            <li><i class="fas fa-check-circle"></i> PR, Outreach & Backlink Acquisition</li>
                            <li><i class="fas fa-check-circle"></i> Custom Marketing Automation Tools</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Contact Strategist</a>
                    </div>
                </div>

                <!-- 4. Automation -->
                <div id="automation" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Quick Automation</h3>
                            <p class="plan-desc">Connect 2-3 essential business tools</p>
                            <div class="plan-price">$399</div>
                            <div class="plan-period">One-time setup</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> 2-3 Apps Integrated (Zapier / Make / n8n)</li>
                            <li><i class="fas fa-check-circle"></i> Automated Webhook Lead Routing</li>
                            <li><i class="fas fa-check-circle"></i> Instant Slack / Email Notification Alerts</li>
                            <li><i class="fas fa-check-circle"></i> 14 Days Testing & Sandbox Verification</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Automate Now</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Business Pipeline</h3>
                            <p class="plan-desc">End-to-end departmental automation</p>
                            <div class="plan-price">$999</div>
                            <div class="plan-period">One-time setup</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Multi-Step Cross-Departmental Workflows</li>
                            <li><i class="fas fa-check-circle"></i> Bi-Directional CRM & ERP Synchronization</li>
                            <li><i class="fas fa-check-circle"></i> Custom Python / Node.js Scraping & Bots</li>
                            <li><i class="fas fa-check-circle"></i> Automated Error Catching & Dead-Letter Queues</li>
                            <li><i class="fas fa-check-circle"></i> 60 Days Support & Health Monitoring</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Get Business Pipeline</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Enterprise RPA</h3>
                            <p class="plan-desc">Robotic automation & legacy portal sync</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Scope-based architecture</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Headless RPA (Playwright / Selenium)</li>
                            <li><i class="fas fa-check-circle"></i> Legacy ERP Data Extraction & Autofill</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated AWS Lambda Serverless Clusters</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Monitoring & Immediate On-Call SLA</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Request Audit</a>
                    </div>
                </div>

                <!-- 5. SaaS Solutions -->
                <div id="saas" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">SaaS MVP Sprint</h3>
                            <p class="plan-desc">Validate your software vision in 4-6 weeks</p>
                            <div class="plan-price">$2,499</div>
                            <div class="plan-period">Milestone-based</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Core Multi-Tenant Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Stripe Subscriptions & Billing Engine</li>
                            <li><i class="fas fa-check-circle"></i> User Authentication & Team Workspaces</li>
                            <li><i class="fas fa-check-circle"></i> Responsive User Dashboard</li>
                            <li><i class="fas fa-check-circle"></i> Production Cloud Deployment</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Build MVP</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Scale SaaS Platform</h3>
                            <p class="plan-desc">Complete commercial product engineering</p>
                            <div class="plan-price">$4,999</div>
                            <div class="plan-period">Milestone-based sprints</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Advanced Tenant Data Isolation</li>
                            <li><i class="fas fa-check-circle"></i> Tiered & Metered Usage-Based Billing</li>
                            <li><i class="fas fa-check-circle"></i> Enterprise Role-Based Access Control (RBAC)</li>
                            <li><i class="fas fa-check-circle"></i> Centralized Super Admin & Telemetry</li>
                            <li><i class="fas fa-check-circle"></i> Docker Containerization & Auto-Scaling</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Launch SaaS</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Enterprise Cloud</h3>
                            <p class="plan-desc">High-concurrency microservices</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Full-scale roadmap</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Kubernetes Clusters on AWS / GCP</li>
                            <li><i class="fas fa-check-circle"></i> SOC-2 & GDPR Compliance Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Engineering Squad</li>
                            <li><i class="fas fa-check-circle"></i> 99.99% Uptime Guarantee & DevOps SLA</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Discuss Roadmap</a>
                    </div>
                </div>

                <!-- 6. Data Analytics -->
                <div id="data-analytics" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">BI Dashboard</h3>
                            <p class="plan-desc">Visual reporting for leadership teams</p>
                            <div class="plan-price">$499</div>
                            <div class="plan-period">One-time setup</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Power BI / Tableau / Looker Dashboard</li>
                            <li><i class="fas fa-check-circle"></i> Up to 3 Connected Data Sources</li>
                            <li><i class="fas fa-check-circle"></i> Executive KPI Scorecards & Metrics</li>
                            <li><i class="fas fa-check-circle"></i> Scheduled Automated Email / PDF Reports</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Order Dashboard</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Analytics Engine</h3>
                            <p class="plan-desc">Centralized cloud warehouse & ETL pipelines</p>
                            <div class="plan-price">$1,299</div>
                            <div class="plan-period">One-time setup</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Cloud Data Warehouse (BigQuery / PostgreSQL)</li>
                            <li><i class="fas fa-check-circle"></i> Automated Daily ETL Cleaning & Ingestion</li>
                            <li><i class="fas fa-check-circle"></i> Cohort, LTV & Customer Churn Modeling</li>
                            <li><i class="fas fa-check-circle"></i> Multi-Department Interactive Drill-Downs</li>
                            <li><i class="fas fa-check-circle"></i> Hands-On Team Training Sessions</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Build Analytics Suite</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Enterprise Lake</h3>
                            <p class="plan-desc">Real-time streaming & predictive modeling</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Scope-based architecture</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Snowflake / Redshift Data Lake Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Sub-Second Real-Time Telemetry Streaming</li>
                            <li><i class="fas fa-check-circle"></i> Machine Learning Demand Forecasting</li>
                            <li><i class="fas fa-check-circle"></i> Strict Data Governance & Row-Level Security</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Consult Data Architect</a>
                    </div>
                </div>

                <!-- 7. AI Engineering -->
                <div id="ai-engineering" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
                    <!-- Starter -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">AI Assistant</h3>
                            <p class="plan-desc">Smart conversational agent for your product</p>
                            <div class="plan-price">$799</div>
                            <div class="plan-period">One-time integration</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> GPT-4o / Gemini API Custom Integration</li>
                            <li><i class="fas fa-check-circle"></i> Trained on Your FAQs & Documentation</li>
                            <li><i class="fas fa-check-circle"></i> Web Embed Widget or In-App Chat Modal</li>
                            <li><i class="fas fa-check-circle"></i> Token Usage & Cost Management Controls</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Integrate AI</a>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="pricing-card popular">
                        <span class="popular-badge">Most Popular</span>
                        <div class="plan-header">
                            <h3 class="plan-title">Agentic RAG System</h3>
                            <p class="plan-desc">Autonomous agents with private enterprise data</p>
                            <div class="plan-price">$2,199</div>
                            <div class="plan-period">Milestone-based</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Complete Retrieval-Augmented Generation (RAG)</li>
                            <li><i class="fas fa-check-circle"></i> Pinecone / Chroma Vector Database Setup</li>
                            <li><i class="fas fa-check-circle"></i> Zero-Hallucination Fact-Checking Guardrails</li>
                            <li><i class="fas fa-check-circle"></i> Tool-Calling Agents (Execute DB & Email Actions)</li>
                            <li><i class="fas fa-check-circle"></i> Strict Zero-Data-Retention Privacy</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100">Deploy RAG Agent</a>
                    </div>

                    <!-- Enterprise -->
                    <div class="pricing-card">
                        <div class="plan-header">
                            <h3 class="plan-title">Custom AI Models</h3>
                            <p class="plan-desc">Proprietary fine-tuning & multimodal vision</p>
                            <div class="plan-price">Custom</div>
                            <div class="plan-period">Full AI development lifecycle</div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check-circle"></i> Fine-Tuned Domain Models (Llama 3 / Mistral)</li>
                            <li><i class="fas fa-check-circle"></i> Computer Vision & Automated OCR Pipelines</li>
                            <li><i class="fas fa-check-circle"></i> High-Throughput FastAPI Asynchronous Endpoints</li>
                            <li><i class="fas fa-check-circle"></i> Full Intellectual Property & Weights Transfer</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-outline w-100" style="border: 2px solid var(--primary); color: var(--primary);">Consult AI Engineer</a>
                    </div>
                </div>
            </div>

            <div style="text-align:center; margin-top:35px; color:#64748b; font-size: 0.95rem;">
                Looking for a custom scope or combination package? <a href="{{ route('contactus') }}" style="color: var(--primary); font-weight: 700; text-decoration: underline;">Contact our advisory team</a> for tailored enterprise agreements.
            </div>
        </div>
    </section>

    <!-- Included Services -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="text-center mb-5">
                <p class="section-kicker" style="color: var(--primary); text-transform: uppercase; font-weight: 700; letter-spacing: 1px; font-size: 0.85rem; margin-bottom: 6px;">All Services Covered</p>
                <h2 class="section-title">Comprehensive Capabilities We Provide</h2>
                <p class="section-subtitle" style="color: #64748b; max-width: 720px; margin: 8px auto;">
                    Every engagement is backed by senior engineers, strict quality assurance, transparent communication, and ongoing warranty support.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-code fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">Web Development</h4>
                        <p class="text-muted small mb-0">High-speed responsive websites, custom web applications, and scalable backend platforms.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-palette fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">Graphic & UI/UX Design</h4>
                        <p class="text-muted small mb-0">Iconic logos, comprehensive brand identity systems, and user-tested Figma interfaces.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-bullhorn fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">Digital Marketing</h4>
                        <p class="text-muted small mb-0">Targeted SEO campaigns, high-ROI paid ads, and social media customer acquisition funnels.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-cogs fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">Automation Solutions</h4>
                        <p class="text-muted small mb-0">Intelligent workflow automations, custom RPA bots, and 24/7 API data synchronization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-cloud fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">SaaS Development</h4>
                        <p class="text-muted small mb-0">Multi-tenant cloud architecture, automated recurring billing engines, and enterprise RBAC.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-chart-line fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">Data Analytics & BI</h4>
                        <p class="text-muted small mb-0">Interactive executive dashboards, automated ETL data warehouses, and predictive revenue models.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <i class="fas fa-brain fa-2x mb-3" style="color: var(--primary);"></i>
                        <h4 class="fw-bold fs-5">AI Engineering</h4>
                        <p class="text-muted small mb-0">Autonomous AI agents, enterprise RAG knowledge bases, and custom fine-tuned LLMs.</p>
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
                        What payment methods do you accept?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We accept all major credit cards, PayPal, wire transfers, and direct bank transfers. For ongoing retainers and milestone-based projects, we provide automated invoicing.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Are there any hidden fees or extra costs?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Transparency is one of our founding principles. Every fee is agreed upon upfront. Any optional third-party costs (such as cloud hosting, third-party API tokens, or domain purchases) will be itemized clearly in your project agreement.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can I customize or adjust my plan after the project starts?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. Software projects often uncover new opportunities as they take shape. We accommodate scope adjustments smoothly through agile sprint planning and transparent budget addenda.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do you offer milestone or installment payments?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes! For mid-to-large projects (SaaS, Web Apps, AI Systems, Automation), payments are typically structured across 3 to 4 milestones (e.g., Discovery/Architecture, Beta Build, Final Launch).
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Who owns the source code and IP?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        You do, 100%. Upon project settlement, all source code, design assets, database models, and cloud credentials are unconditionally transferred to your organization.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 final-cta-section">
        <div class="container">
            <div class="final-cta-inner">
                <div>
                    <h2>Ready to get <span style="color: var(--primary);">started?</span></h2>
                    <p>Discuss your specifications with our architects and receive a detailed roadmap with guaranteed timelines.</p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Request Free Estimate</a>
                    <a href="{{ route('contactus') }}" class="btn btn-outline service-hero-secondary">Talk to Sales</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Modern Pricing Cards */
        .pricing-tab-btn {
            padding: 9px 20px;
            border-radius: 9999px;
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: #475569;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .pricing-tab-btn:hover {
            border-color: var(--primary, #00d2d3);
            color: var(--primary, #00d2d3);
        }

        .pricing-tab-btn.active {
            background: var(--primary, #00d2d3);
            color: #ffffff;
            border-color: var(--primary, #00d2d3);
            box-shadow: 0 4px 14px rgba(0, 210, 211, 0.35);
        }

        .pricing-card {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 34px 26px;
            text-align: center;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.08);
        }

        .pricing-card.popular {
            border: 2px solid var(--primary, #00d2d3);
            box-shadow: 0 12px 30px rgba(0, 210, 211, 0.12);
        }

        .popular-badge {
            position: absolute;
            top: -13px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary, #00d2d3);
            color: #ffffff;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 4px 14px;
            border-radius: 9999px;
        }

        .plan-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: #0f172a;
            margin: 0;
        }

        .plan-desc {
            color: #64748b;
            font-size: 0.9rem;
            margin: 8px 0 18px;
            min-height: 42px;
        }

        .plan-price {
            font-size: 2.4rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1;
        }

        .plan-period {
            color: #64748b;
            font-size: 0.85rem;
            margin: 8px 0 24px;
        }

        .plan-features {
            list-style: none;
            padding: 0;
            text-align: left;
            margin: 0 0 28px 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex-grow: 1;
            color: #334155;
            font-size: 0.92rem;
        }

        .plan-features li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.5;
        }

        .plan-features li i {
            color: var(--primary, #00d2d3);
            font-size: 1rem;
            margin-top: 3px;
            flex-shrink: 0;
        }
    </style>

    <script>
        function switchCategory(categoryId, btnEl) {
            // Hide all pricing groups
            const groups = document.querySelectorAll('.pricing-group');
            groups.forEach(group => {
                group.style.display = 'none';
                group.style.opacity = '0';
            });

            // Show selected group
            const selectedGroup = document.getElementById(categoryId);
            if (selectedGroup) {
                selectedGroup.style.display = 'grid';
                setTimeout(() => {
                    selectedGroup.style.transition = 'opacity 0.25s ease';
                    selectedGroup.style.opacity = '1';
                }, 20);
            }

            // Sync Desktop Tabs
            const tabBtns = document.querySelectorAll('.pricing-tab-btn');
            tabBtns.forEach(btn => btn.classList.remove('active'));
            if (btnEl) {
                btnEl.classList.add('active');
            } else {
                const matchingBtn = document.querySelector(`.pricing-tab-btn[data-target="${categoryId}"]`);
                if (matchingBtn) matchingBtn.classList.add('active');
            }

            // Sync Mobile Dropdown
            const selectEl = document.getElementById('pricingCategory');
            if (selectEl && selectEl.value !== categoryId) {
                selectEl.value = categoryId;
            }
        }

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
        });
    </script>
</x-layout>
