<x-layout>
    <!-- Pricing Hero -->
    <section class="service-hero" style="background: url('/images/pricing.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Pricing</p>
                <h1 class="service-hero-title" style="color: #fff;">Plans that fit <span
                        style="color: var(--primary);">every stage</span></h1>
                <p style="color: #eee;">Flexible pricing for startups
                    and enterprises — choose a plan or request a custom quote if you need something more tailored.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Tiers -->
    <section class="py-5" style="background:#fff;">
        <div class="container">
            <div style="text-align:center; margin-bottom:28px;">
                <p class="section-kicker text-primary">Simple & transparent</p>
                <h2 class="section-title">Choose your plan</h2>
                <p class="section-subtitle" style="color:#666; max-width:820px; margin:8px auto;">All plans include a
                    dedicated project manager, regular reporting and optional add-ons like SEO and ongoing maintenance.
                </p>

                <!-- Category Selector -->
                <div style="margin-top: 30px; display: flex; justify-content: center; align-items: center; gap: 15px;">
                    <label for="pricingCategory" style="font-weight: 700; color: #333;">Select Service:</label>
                    <select id="pricingCategory" onchange="switchCategory(this.value)"
                        style="padding: 10px 15px; border-radius: 8px; border: 2px solid var(--primary); font-weight: 600; outline: none; cursor: pointer; background: #fff;">
                        <option value="web-dev" selected>Web Development</option>
                        <option value="graphic-design">Graphic Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="ms-office">MS Office Solutions</option>
                    </select>
                </div>
            </div>

            <div id="pricing-container">
                <!-- Web Development (Default) -->
                <div id="web-dev" class="pricing-group"
                    style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
                    <!-- Starter -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Starter</h3>
                        <p style="color:#666; margin:8px 0 16px;">For small sites and MVPs</p>
                        <div style="font-size:28px; font-weight:900;">$499</div>
                        <div style="color:#777; margin-bottom:14px;">One-time</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:250px; margin:0 auto 14px;">
                            <li>• Custom landing page</li>
                            <li>• Responsive design</li>
                            <li>• Basic SEO setup</li>
                            <li>• 30 days support</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Get
                            Started</a>
                    </div>

                    <!-- Growth -->
                    <div
                        style="border:2px solid var(--primary); border-radius:12px; padding:24px; text-align:center; background:#fff; box-shadow:0 8px 20px rgba(16,24,40,0.06);">
                        <h3 style="margin:0; font-weight:900;">Growth</h3>
                        <p style="color:#666; margin:8px 0 16px;">Small businesses and established brands</p>
                        <div style="font-size:30px; font-weight:900;">$1,499</div>
                        <div style="color:#777; margin-bottom:14px;">One-time or 3× monthly</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:300px; margin:0 auto 14px;">
                            <li>• Full website (up to 10 pages)</li>
                            <li>• CMS integration</li>
                            <li>• SEO & performance optimizations</li>
                            <li>• 3 months maintenance</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:12px 20px; border-radius:8px; text-decoration:none; font-weight:800;">Start
                            Project</a>
                    </div>

                    <!-- Premium -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Premium</h3>
                        <p style="color:#666; margin:8px 0 16px;">Complex platforms & integrations</p>
                        <div style="font-size:28px; font-weight:900;">Custom</div>
                        <div style="color:#777; margin-bottom:14px;">Contact for proposal</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:280px; margin:0 auto 14px;">
                            <li>• Custom architecture & APIs</li>
                            <li>• E‑commerce and headless solutions</li>
                            <li>• Dedicated engineering team</li>
                            <li>• SLA-based support</li>
                        </ul>
                        <a href="{{ route('quote') }}" class="btn"
                            style="background:transparent; border:2px solid var(--primary); color:var(--primary); padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Request
                            Quote</a>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div id="graphic-design" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
                    <!-- Starter -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Logo Pro</h3>
                        <p style="color:#666; margin:8px 0 16px;">Essential branding for startups</p>
                        <div style="font-size:28px; font-weight:900;">$199</div>
                        <div style="color:#777; margin-bottom:14px;">One-time</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:250px; margin:0 auto 14px;">
                            <li>• 3 Unique Logo Concepts</li>
                            <li>• Vector Source Files</li>
                            <li>• Social Media Kit</li>
                            <li>• 3 Rounds of Revisions</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Select
                            Plan</a>
                    </div>

                    <!-- Growth -->
                    <div
                        style="border:2px solid var(--primary); border-radius:12px; padding:24px; text-align:center; background:#fff; box-shadow:0 8px 20px rgba(16,24,40,0.06);">
                        <h3 style="margin:0; font-weight:900;">Brand Identity</h3>
                        <p style="color:#666; margin:8px 0 16px;">Complete visual identity package</p>
                        <div style="font-size:30px; font-weight:900;">$599</div>
                        <div style="color:#777; margin-bottom:14px;">One-time</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:300px; margin:0 auto 14px;">
                            <li>• Premium Logo Suite</li>
                            <li>• Complete Style Guide</li>
                            <li>• Business Stationery Design</li>
                            <li>• Marketing Collateral</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:12px 20px; border-radius:8px; text-decoration:none; font-weight:800;">Go
                            Premium</a>
                    </div>

                    <!-- Premium -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Full UX/UI</h3>
                        <p style="color:#666; margin:8px 0 16px;">Product design & prototyping</p>
                        <div style="font-size:28px; font-weight:900;">Custom</div>
                        <div style="color:#777; margin-bottom:14px;">Quote based on scope</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:280px; margin:0 auto 14px;">
                            <li>• User Journey Mapping</li>
                            <li>• High-Fidelity Prototypes</li>
                            <li>• Design System Creation</li>
                            <li>• Developer Handoff</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:transparent; border:2px solid var(--primary); color:var(--primary); padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Contact
                            Us</a>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div id="digital-marketing" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
                    <!-- Starter -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Social Boost</h3>
                        <p style="color:#666; margin:8px 0 16px;">Presence management for SMBs</p>
                        <div style="font-size:28px; font-weight:900;">$299</div>
                        <div style="color:#777; margin-bottom:14px;">Per Month</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:250px; margin:0 auto 14px;">
                            <li>• 3 Platforms Management</li>
                            <li>• 12 Monthly Posts</li>
                            <li>• Basic Ad Management</li>
                            <li>• Monthly Report</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Subscribe</a>
                    </div>

                    <!-- Growth -->
                    <div
                        style="border:2px solid var(--primary); border-radius:12px; padding:24px; text-align:center; background:#fff; box-shadow:0 8px 20px rgba(16,24,40,0.06);">
                        <h3 style="margin:0; font-weight:900;">Growth Engine</h3>
                        <p style="color:#666; margin:8px 0 16px;">Scale your traffic and sales</p>
                        <div style="font-size:30px; font-weight:900;">$899</div>
                        <div style="color:#777; margin-bottom:14px;">Per Month</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:300px; margin:0 auto 14px;">
                            <li>• Advanced SEO Strategy</li>
                            <li>• Content Marketing</li>
                            <li>• Full Funnel Ads</li>
                            <li>• Weekly Stats & Analysis</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:12px 20px; border-radius:8px; text-decoration:none; font-weight:800;">Get
                            Started</a>
                    </div>

                    <!-- Premium -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Enterprise</h3>
                        <p style="color:#666; margin:8px 0 16px;">Comprehensive 360° marketing</p>
                        <div style="font-size:28px; font-weight:900;">Custom</div>
                        <div style="color:#777; margin-bottom:14px;">Custom Strategy</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:280px; margin:0 auto 14px;">
                            <li>• Dedicated Growth Lead</li>
                            <li>• Custom Software & Tools</li>
                            <li>• Brand Reputation Management</li>
                            <li>• Global Campaign Support</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:transparent; border:2px solid var(--primary); color:var(--primary); padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Inquire
                            Now</a>
                    </div>
                </div>

                <!-- MS Office -->
                <div id="ms-office" class="pricing-group"
                    style="display:none; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:20px;">
                    <!-- Starter -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Excel Automation</h3>
                        <p style="color:#666; margin:8px 0 16px;">Simple workflows & reporting</p>
                        <div style="font-size:28px; font-weight:900;">$99</div>
                        <div style="color:#777; margin-bottom:14px;">One-time</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:250px; margin:0 auto 14px;">
                            <li>• Custom Macro Creation</li>
                            <li>• Pivot Table Dashboards</li>
                            <li>• Formula Optimization</li>
                            <li>• 1 Month Fixes</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Buy
                            Now</a>
                    </div>

                    <!-- Growth -->
                    <div
                        style="border:2px solid var(--primary); border-radius:12px; padding:24px; text-align:center; background:#fff; box-shadow:0 8px 20px rgba(16,24,40,0.06);">
                        <h3 style="margin:0; font-weight:900;">Workflow Suite</h3>
                        <p style="color:#666; margin:8px 0 16px;">Business-wide MS Office tools</p>
                        <div style="font-size:30px; font-weight:900;">$299</div>
                        <div style="color:#777; margin-bottom:14px;">One-time</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:300px; margin:0 auto 14px;">
                            <li>• Full Word/PPT Templates</li>
                            <li>• Complex Excel Logic</li>
                            <li>• Batch Data Processing</li>
                            <li>• Team Support</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:var(--primary); color:#fff; padding:12px 20px; border-radius:8px; text-decoration:none; font-weight:800;">Get
                            Started</a>
                    </div>

                    <!-- Premium -->
                    <div
                        style="border:1px solid #eee; border-radius:10px; padding:22px; text-align:center; background:#fff;">
                        <h3 style="margin:0; font-weight:800;">Custom Solutions</h3>
                        <p style="color:#666; margin:8px 0 16px;">End-to-end office automation</p>
                        <div style="font-size:28px; font-weight:900;">Custom</div>
                        <div style="color:#777; margin-bottom:14px;">Scope-based</div>
                        <ul
                            style="list-style:none; padding:0; color:#444; text-align:left; max-width:280px; margin:0 auto 14px;">
                            <li>• API & Outlook Integrations</li>
                            <li>• Custom Add-in Development</li>
                            <li>• Database Connections</li>
                            <li>• On-site Training</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn"
                            style="background:transparent; border:2px solid var(--primary); color:var(--primary); padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:700;">Consultation</a>
                    </div>
                </div>
            </div>


            <div style="text-align:center; margin-top:22px; color:#666;">
                <small>Need a custom package? <a href="{{ route('contactus') }}">Contact us</a> for enterprise pricing
                    and long-term partnerships.</small>
            </div>
        </div>
    </section>

    <!-- Included Services -->
    <section class="py-5 service-section">
        <div class="container">
            <div style="text-align:center; margin-bottom:18px;">
                <p class="section-kicker text-primary">What's included</p>
                <h2 class="section-title">Services we provide</h2>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Design & UX</h3>
                    <p>Wireframes, visual design, and interactive prototypes tailored to your brand.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Development</h3>
                    <p>Front-end, back-end, APIs, and CMS integration with modern toolchains.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>SEO & Performance</h3>
                    <p>Technical SEO, content guidance, and performance tuning for better rankings.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Support</h3>
                    <p>Maintenance plans, security updates and priority fixes available as add-ons.</p>
                </div>
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
                        What payment methods do you accept?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We accept all major credit cards, PayPal, and bank transfers. For enterprise clients and ongoing
                        retainers, we also support automated invoicing and ACH transfers.
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
                        Transparency is one of our core values. Every cost is discussed and agreed upon upfront. Any
                        third-party costs (like domain registration, specialized API fees, or premium stock assets) will
                        be clearly itemized in your proposal.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can I change my plan after the project starts?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes, you can upgrade or scale your project scope at any time. We understand that requirements
                        can evolve, and we’ll work with you to adjust the timeline and budget to accommodate new
                        features.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do you offer monthly payment options?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes! For our Growth and Enterprise plans, we offer the flexibility to split the total project
                        cost into milestone-based payments or monthly installments to help you manage your cash flow
                        effectively.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Do you offer discounts for non-profits or startups?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We love supporting social impact and innovation. Registered non-profit organizations and
                        early-stage startups may be eligible for a 15% discount on our standard service packages.
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
                    <h2>Ready to <span style="color: var(--primary);">start?</span></h2>
                    <p>Tell us about your project and we'll prepare a detailed proposal with timelines and costs.</p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('contactus') }}" class="btn btn-primary">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script>
    function switchCategory(categoryId) {
        // Hide all pricing groups
        const groups = document.querySelectorAll('.pricing-group');
        groups.forEach(group => {
            group.style.display = 'none';
        });

        // Show selected group
        const selectedGroup = document.getElementById(categoryId);
        if (selectedGroup) {
            selectedGroup.style.display = 'grid';

            // Add a simple fade-in effect via JS
            selectedGroup.style.opacity = '0';
            let opacity = 0;
            const interval = setInterval(() => {
                if (opacity >= 1) {
                    clearInterval(interval);
                }
                selectedGroup.style.opacity = opacity;
                opacity += 0.1;
            }, 30);
        }
    }
</script>
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
    });
</script>