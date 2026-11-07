<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMail;
use App\Mail\FeedbackMail;
use App\Mail\QuoteMail;
use App\Mail\ConsultingMail;


class PageController extends Controller
{
    private $services = [
        // Development
        'custom-web-development' => [
            'title' => 'Custom Web Development',
            'subtitle' => 'Tailored web solutions built for performance and scale.',
            'description' => 'We build robust, secure, and scalable web applications tailored to your specific business needs. From complex enterprise platforms to sleek landing pages, we use the latest technologies like Laravel, React, and Vue.js to deliver exceptional results.',
            'features' => ['Custom Architecture', 'API Integration', 'Secure & Scalable', 'Ongoing Support'],
            'icon' => 'fa-code'
        ],
        'app-development' => [
            'title' => 'App Development',
            'subtitle' => 'Native and cross-platform mobile experiences.',
            'description' => 'Reach your customers on any device with our mobile app development services. We create intuitive, high-performance apps for iOS and Android using Flutter and React Native.',
            'features' => ['iOS & Android', 'Cross-Platform', 'UI/UX Focused', 'App Store Optimization'],
            'icon' => 'fa-mobile-alt'
        ],
        'front-end-development' => [
            'title' => 'Front-end Development',
            'subtitle' => 'Engaging interfaces that users love.',
            'description' => 'We bring designs to life with pixel-perfect font-end coding. Using modern frameworks, we ensure your site is responsive, fast, and accessible across all browsers.',
            'features' => ['Responsive Design', 'Interactive Animations', 'Performance Optimized', 'Accessibility Ready'],
            'icon' => 'fa-laptop-code'
        ],
        'back-end-development' => [
            'title' => 'Back-end Development',
            'subtitle' => 'Powerful logic driving your applications.',
            'description' => 'Our backend solutions ensure your data is secure and your logic is sound. We build efficient APIs, manage databases, and handle server-side logic with precision.',
            'features' => ['API Development', 'Database Management', 'Cloud Integration', 'Security Best Practices'],
            'icon' => 'fa-server'
        ],
        'full-stack-development' => [
            'title' => 'Full-stack Development',
            'subtitle' => 'End-to-end solutions for complex projects.',
            'description' => 'Get the best of both worlds. Our full-stack developers handle everything from the user interface to the server infrastructure, ensuring a seamless development process.',
            'features' => ['End-to-End Dev', 'Rapid Prototyping', 'Scalable Architecture', 'Complete Ownership'],
            'icon' => 'fa-layer-group'
        ],

        // Design
        'logo-design' => [
            'title' => 'Logo Design',
            'subtitle' => 'Memorable identities for modern brands.',
            'description' => 'Your logo is the face of your brand. We design unique, memorable, and versatility logos that capture the essence of your business and leave a lasting impression.',
            'features' => ['Unique Concepts', 'Brand Guidelines', 'Vector Formats', 'Unlimited Revisions'],
            'icon' => 'fa-pen-nib'
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design',
            'subtitle' => 'User-centric designs that convert.',
            'description' => 'We design interfaces that are not only beautiful but also intuitive. Our user-centered approach ensures that your customers have a seamless and enjoyable experience.',
            'features' => ['User Research', 'Wireframing', 'Prototyping', 'Usability Testing'],
            'icon' => 'fa-bezier-curve'
        ],
        'business-card-stationery' => [
            'title' => 'Business Card & Stationery',
            'subtitle' => 'Professional print assets for your business.',
            'description' => 'Make a professional impact in the physical world. We design cohesive stationery sets including business cards, letterheads, and envelopes.',
            'features' => ['Print Ready', 'Modern Layouts', 'Brand Consistency', 'Premium Look'],
            'icon' => 'fa-id-card'
        ],
        'social-media-post-design' => [
            'title' => 'Social Media Post Design',
            'subtitle' => 'Viral-ready graphics for your feed.',
            'description' => 'Stand out in the scroll. We create eye-catching social media graphics that engage your audience and promote your brand effectively on Instagram, Facebook, and LinkedIn.',
            'features' => ['Platform Optimised', 'Engagement Focused', 'Brand Aligned', 'Fast Turnaround'],
            'icon' => 'fa-hashtag'
        ],
        'brochure-design' => [
            'title' => 'Brochure Design',
            'subtitle' => 'Informative marketing materials.',
            'description' => 'Communicate your value proposition clearly with professionally designed brochures and flyers. Perfect for trade shows, meetings, and direct mail.',
            'features' => ['Creative Layouts', 'High Impact', 'Print & Digital', 'Compelling Copy'],
            'icon' => 'fa-book-open'
        ],

        // Marketing
        'digital-marketing' => [
            'title' => 'Digital Marketing',
            'subtitle' => 'Growth strategies that deliver ROI.',
            'description' => 'We help you reach your target audience and achieve your business goals through comprehensive digital marketing strategies including PPC, Social Media, and Content Marketing.',
            'features' => ['Strategy Planning', 'Campaign Management', 'Analytics & Reporting', 'Conversion Optimization'],
            'icon' => 'fa-bullhorn'
        ],
        'seo' => [
            'title' => 'Search Engine Optimization',
            'subtitle' => 'Rank higher, drive more traffic.',
            'description' => 'Improve your visibility on Google. Our white-hat SEO techniques help you climb the rankings, drive organic traffic, and establish authority in your industry.',
            'features' => ['Keyword Research', 'On-Page SEO', 'Link Building', 'Technical Audits'],
            'icon' => 'fa-search'
        ],
        'content-marketing' => [
            'title' => 'Content Marketing',
            'subtitle' => 'Stories that connect and convert.',
            'description' => 'Content is king. We create valuable, relevant content that attracts and retains your audience, positioning your brand as a thought leader.',
            'features' => ['Blog Writing', 'Copywriting', 'Content Strategy', 'Video Scripts'],
            'icon' => 'fa-paragraph'
        ],

        // MS Office
        'excel-automation' => [
            'title' => 'Excel Automation',
            'subtitle' => 'Save time with smart spreadsheets.',
            'description' => 'Stop doing manual data entry. We create custom Excel macros, formulas, and VBA scripts to automate your repetitive tasks and reports.',
            'features' => ['Custom VBA', 'Complex Formulas', 'Dashboard Creation', 'Data Analysis'],
            'icon' => 'fa-file-excel'
        ],
        'word-documentation' => [
            'title' => 'Word Documentation',
            'subtitle' => 'Professional document formatting.',
            'description' => 'We format and design professional Word documents, templates, and reports that look clean, consistent, and on-brand.',
            'features' => ['Template Design', 'Advanced Formatting', 'Table of Contents', 'Fillable Forms'],
            'icon' => 'fa-file-word'
        ],
        'powerpoint-presentation' => [
            'title' => 'PowerPoint Presentation',
            'subtitle' => 'Pitch decks that win clients.',
            'description' => 'Deliver your message with impact. We design visually stunning PowerPoint presentations that keep your audience engaged and persuade them to act.',
            'features' => ['Custom Graphics', 'Infographics', 'Animations', 'Storytelling'],
            'icon' => 'fa-file-powerpoint'
        ],

        // Automation, SaaS, Data Analytics & AI
        'automation' => [
            'title' => 'Automation Solutions',
            'subtitle' => 'Streamline workflows, automate manual operations, and boost efficiency.',
            'description' => 'Eliminate repetitive tasks and optimize business operations with intelligent workflow automation, robotic process automation (RPA), and seamless API integrations.',
            'features' => ['Workflow Automation', 'API & Webhook Integrations', 'RPA & Smart Bots', 'Data Sync & Process Optimization'],
            'icon' => 'fa-cogs'
        ],
        'saas' => [
            'title' => 'SaaS Development',
            'subtitle' => 'Scalable, multi-tenant cloud software tailored for high growth.',
            'description' => 'We design, build, and deploy robust Software-as-a-Service (SaaS) platforms with multi-tenant architecture, automated subscription billing, role-based access, and enterprise scalability.',
            'features' => ['Multi-Tenant Architecture', 'Stripe & Payment Gateways', 'Subscription Billing Engine', 'Cloud & DevOps Setup'],
            'icon' => 'fa-cloud'
        ],
        'data-analytics' => [
            'title' => 'Data Analytics & BI',
            'subtitle' => 'Turn raw data into actionable business intelligence and dashboards.',
            'description' => 'Empower your decision-making with custom business intelligence dashboards, real-time analytics pipelines, automated reporting, and predictive modeling.',
            'features' => ['Interactive BI Dashboards', 'Data Warehousing & ETL', 'Performance Tracking', 'Predictive Modeling'],
            'icon' => 'fa-chart-line'
        ],
        'ai-engineering' => [
            'title' => 'AI Engineering',
            'subtitle' => 'Autonomous AI agents, LLM integrations, and custom machine learning.',
            'description' => 'Harness the power of Artificial Intelligence to automate complex decisions, build custom AI agents, fine-tune modern LLMs, and deploy intelligent business solutions.',
            'features' => ['Custom AI Agents & Chatbots', 'LLM Integration (GPT, Gemini)', 'Predictive Machine Learning', 'Computer Vision & NLP Solutions'],
            'icon' => 'fa-brain'
        ],
    ];
    public function index()
    {
        SEOMeta::setTitle('Nexdev Vision | Custom Web Development, UI/UX Design & AI Solutions');
        SEOMeta::setDescription('Nexdev Vision is a top-rated digital agency offering custom web development, UI/UX graphic design, SEO digital marketing, business automation, and AI solutions to scale modern brands globally.');
        SEOMeta::addKeyword(['Custom Web Development', 'UI/UX Design Agency', 'Digital Marketing Services', 'SEO Agency', 'Business Automation', 'AI Engineering', 'SaaS Development', 'Nexdev Vision']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.index');
    }

    public function consulting()
    {
        SEOMeta::setTitle('Strategic Tech Consulting & Digital Transformation | Nexdev Vision');
        SEOMeta::setDescription('Accelerate business growth with Nexdev Vision’s strategic tech consulting. We provide digital transformation roadmaps, cloud architecture, and startup MVP advisory.');
        SEOMeta::addKeyword(['Tech Consulting', 'Digital Transformation Consulting', 'IT Strategy', 'Cloud Architecture Advisory', 'Startup Tech Consultant']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.consulting');
    }

    public function contactus()
    {
        SEOMeta::setTitle('Contact Us | Hire Web Developers & Designers | Nexdev Vision');
        SEOMeta::setDescription('Ready to elevate your digital presence? Contact Nexdev Vision today for expert web development, brand design, and AI automation consultations.');
        SEOMeta::addKeyword(['Contact Nexdev Vision', 'Hire Web Developers', 'Hire Graphic Designers', 'Digital Agency Consultation', 'Tech Support']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.contactus');
    }

    public function logoDesign()
    {
        SEOMeta::setTitle('Custom Logo Design & Brand Identity Services | Nexdev Vision');
        SEOMeta::setDescription('Craft an unforgettable visual identity. Nexdev Vision designs iconic, modern, scalable custom logos and complete brand style guidelines for businesses.');
        SEOMeta::addKeyword(['Custom Logo Design', 'Brand Identity Design', 'Business Logo Designer', 'Minimalist Logo', 'Vector Brand Mark']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.logodesign');
    }

    public function pricing()
    {
        SEOMeta::setTitle('Affordable Pricing Plans & Packages | Web, Design & Marketing | Nexdev Vision');
        SEOMeta::setDescription('Transparent, value-driven pricing packages for web development, logo design, SEO marketing, and workflow automation. Choose the perfect plan for your business.');
        SEOMeta::addKeyword(['Web Development Pricing', 'Graphic Design Packages', 'Digital Marketing Cost', 'Affordable Agency Plans', 'Transparent Development Rates']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.pricing');
    }

    public function webDevelopment()
    {
        SEOMeta::setTitle('Custom Web Development Services | Fast, Secure & Scalable | Nexdev Vision');
        SEOMeta::setDescription('High-performance custom web development by Nexdev Vision. We build bespoke web applications, eCommerce stores, and scalable platforms with Laravel, React & Node.js.');
        SEOMeta::addKeyword(['Custom Web Development', 'Full Stack Development Services', 'Laravel Developers', 'React Web Apps', 'eCommerce Website Development', 'Fast Secure Websites']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.web-development');
    }

    public function graphicDesign()
    {
        SEOMeta::setTitle('Creative Graphic Design & Brand Identity Agency | Nexdev Vision');
        SEOMeta::setDescription('Build a powerful brand with Nexdev Vision’s graphic design services. From custom logo marks and marketing collateral to Figma UI/UX interfaces and print assets.');
        SEOMeta::addKeyword(['Graphic Design Services', 'Creative Design Agency', 'Logo & Branding', 'Figma UI UX Design', 'Print Collateral', 'Packaging Design']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.graphic-design');
    }

    public function digitalMarketingPage()
    {
        SEOMeta::setTitle('Results-Driven Digital Marketing & SEO Services | Nexdev Vision');
        SEOMeta::setDescription('Drive high-intent traffic, rank #1 on Google, and convert leads with Nexdev Vision’s data-driven SEO, Google Ads PPC, social media marketing, and growth funnels.');
        SEOMeta::addKeyword(['Digital Marketing Services', 'SEO Optimization Agency', 'Google Ads PPC Management', 'Social Media Marketing', 'Conversion Rate Optimization', 'B2B Lead Generation']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.digital-marketing');
    }

    public function msOffice()
    {
        SEOMeta::setTitle('MS Office Automation & Advanced Excel Solutions | Nexdev Vision');
        SEOMeta::setDescription('Maximize team efficiency with corporate MS Office solutions. We build advanced automated Excel dashboards, custom VBA macros, and investor pitch presentations.');
        SEOMeta::addKeyword(['MS Office Solutions', 'Excel VBA Automation', 'Custom Excel Modeling', 'Automated Spreadsheets', 'PowerPoint Pitch Deck Design']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.ms-office');
    }

    public function saas()
    {
        SEOMeta::setTitle('SaaS Application Development & Cloud Architecture | Nexdev Vision');
        SEOMeta::setDescription('Engineer scalable, multi-tenant cloud software with Nexdev Vision. From rapid MVP development to enterprise recurring billing, API architecture, and AWS deployment.');
        SEOMeta::addKeyword(['SaaS Development Services', 'Cloud Software Architecture', 'Multi Tenant SaaS', 'SaaS MVP Development', 'Stripe Billing Automation']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.saas');
    }

    public function automation()
    {
        SEOMeta::setTitle('Business Process Automation & RPA Solutions | Nexdev Vision');
        SEOMeta::setDescription('Eliminate repetitive tasks and scale 24/7 with Nexdev Vision’s workflow automation. Custom API integrations, RPA bots, and automated CRM pipelines.');
        SEOMeta::addKeyword(['Business Process Automation', 'Workflow Automation Services', 'RPA Bot Development', 'Custom API Integration', 'Zapier Make Automation']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.automation');
    }

    public function dataAnalytics()
    {
        SEOMeta::setTitle('Data Analytics & Business Intelligence Dashboards | Nexdev Vision');
        SEOMeta::setDescription('Turn complex raw data into profitable revenue strategies. Nexdev Vision delivers live executive KPI dashboards, automated reporting pipelines, and predictive analytics.');
        SEOMeta::addKeyword(['Data Analytics Services', 'Business Intelligence Dashboards', 'Power BI Reporting', 'Tableau Dashboards', 'Predictive Analytics']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.data-analytics');
    }

    public function aiEngineering()
    {
        SEOMeta::setTitle('Custom AI Engineering & Autonomous Agent Development | Nexdev Vision');
        SEOMeta::setDescription('Deploy cutting-edge artificial intelligence with Nexdev Vision. Enterprise autonomous AI agents, fine-tuned LLMs, custom RAG search engines, and computer vision.');
        SEOMeta::addKeyword(['AI Engineering Services', 'Custom AI Agent Development', 'Enterprise LLM Integration', 'RAG Architecture', 'Generative AI Solutions']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.ai-engineering');
    }

    public function service($slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }

        $service = $this->services[$slug];

        SEOMeta::setTitle('Nexdev Vision | ' . $service['title']);
        SEOMeta::setDescription($service['subtitle']);

        // Pass all services for the sidebar list
        $allServices = $this->services;

        return view('pages.service-detail', compact('service', 'allServices', 'slug'));
    }

    public function getQuote()
    {
        SEOMeta::setTitle('Get a Custom Project Quote | Transparent Pricing | Nexdev Vision');
        SEOMeta::setDescription('Request a free, transparent project quote from Nexdev Vision. Tailored estimates with clear milestones for custom web development, graphic design, and AI automation.');
        SEOMeta::addKeyword(['Request Project Quote', 'Web Development Cost', 'Graphic Design Estimate', 'Digital Agency Pricing', 'Custom Software Quote']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.quote');
    }

    public function feedback()
    {
        SEOMeta::setTitle('Client Feedback & Suggestions | Nexdev Vision');
        SEOMeta::setDescription('We value client feedback. Share your project experience and help Nexdev Vision continuously raise the bar for digital innovation and delivery.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.feedback');
    }

    public function reviews()
    {
        SEOMeta::setTitle('Client Reviews & Success Stories | Verified Testimonials | Nexdev Vision');
        SEOMeta::setDescription('Discover what founders and tech executives say about Nexdev Vision. Read verified reviews and case studies of businesses scaling with our web and AI solutions.');
        SEOMeta::addKeyword(['Nexdev Vision Reviews', 'Client Testimonials', 'Digital Agency Case Studies', 'Verified Client Feedback']);
        SEOMeta::addMeta('robots', 'index,follow');

        $testimonials = [
            [
                'name' => 'Ayesha Khan',
                'position' => 'Product Manager',
                'company' => 'FinCore Systems',
                'rating' => 5,
                'text' => 'Their team understood our requirements quickly and delivered a robust solution ahead of schedule. Communication and execution were both excellent.',
                'date' => 'Feb 2025'
            ],
            [
                'name' => 'James Peterson',
                'position' => 'CTO',
                'company' => 'CloudNova',
                'rating' => 5,
                'text' => 'Nexdev Vision helped us migrate to a cloud-based architecture seamlessly. Performance and scalability improved significantly.',
                'date' => 'Feb 2025'
            ],
            [
                'name' => 'Fatima Noor',
                'position' => 'Operations Lead',
                'company' => 'HealthBridge',
                'rating' => 4,
                'text' => 'Very professional team with strong technical skills. Minor revisions were needed, but they handled feedback positively.',
                'date' => 'Mar 2025'
            ],
            [
                'name' => 'Robert Miller',
                'position' => 'Business Analyst',
                'company' => 'InsightWorks',
                'rating' => 5,
                'text' => 'Their data-driven approach helped us optimize our internal processes. The results were measurable within weeks.',
                'date' => 'Mar 2025'
            ],
            [
                'name' => 'Sana Malik',
                'position' => 'Startup Founder',
                'company' => 'EduSpark',
                'rating' => 5,
                'text' => 'From idea to execution, the experience was smooth and collaborative. They truly care about product quality.',
                'date' => 'Apr 2025'
            ],
            [
                'name' => 'Daniel Thompson',
                'position' => 'Project Manager',
                'company' => 'BuildRight Co.',
                'rating' => 4,
                'text' => 'Strong project management and timely delivery. The final product met all our expectations.',
                'date' => 'Apr 2025'
            ],
            [
                'name' => 'Hassan Raza',
                'position' => 'Technical Lead',
                'company' => 'SoftEdge Labs',
                'rating' => 5,
                'text' => 'Clean code, clear documentation, and excellent post-delivery support. Highly recommended for complex projects.',
                'date' => 'May 2025'
            ],
            [
                'name' => 'Olivia Brown',
                'position' => 'UX Consultant',
                'company' => 'DesignLoop',
                'rating' => 5,
                'text' => 'Their design sense is outstanding. The UI/UX improvements significantly boosted user engagement.',
                'date' => 'May 2025'
            ],
            [
                'name' => 'Usman Ali',
                'position' => 'E-commerce Manager',
                'company' => 'ShopNation',
                'rating' => 5,
                'text' => 'They optimized our platform for speed and conversions. Sales performance improved noticeably after launch.',
                'date' => 'Jun 2025'
            ]
        ];

        return view('pages.reviews', compact('testimonials'));
    }

    public function sitemap()
    {
        SEOMeta::setTitle('Sitemap | Nexdev Vision');
        SEOMeta::setDescription('Nexdev Vision website sitemap. Find all our pages, services, and policies in one place.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.sitemap');
    }

    public function about()
    {
        SEOMeta::setTitle('About Us | Global Digital Innovation & Tech Agency | Nexdev Vision');
        SEOMeta::setDescription('Discover Nexdev Vision—a premier digital innovation agency with 13+ years of excellence delivering custom web development, brand design, and AI automation to clients globally.');
        SEOMeta::addKeyword(['About Nexdev Vision', 'Digital Agency Team', 'Tech Innovation Company', 'Global Web Development Agency']);
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.about');
    }

    public function terms()
    {
        SEOMeta::setTitle('Terms of Service | Nexdev Vision');
        SEOMeta::setDescription('Read our Terms of Service to understand your rights and responsibilities when using Nexdev Vision services.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.terms');
    }

    public function privacy()
    {
        SEOMeta::setTitle('Privacy Policy | Nexdev Vision');
        SEOMeta::setDescription('Learn how Nexdev Vision collects, uses, and protects your personal information in our Privacy Policy.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.privacy');
    }

    public function refundPolicy()
    {
        SEOMeta::setTitle('Refund Policy | Nexdev Vision');
        SEOMeta::setDescription('Read Nexdev Vision\'s Refund Policy to understand our commitment, satisfaction guarantees, milestones, and cancellation terms.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.refund-policy');
    }

    public function handleContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('nexdev.vision@gmail.com')->send(new ContactMail($data));
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Contact email error: ' . $e->getMessage());
            return back()->with('error', 'Unable to send message via mail server at this moment. Please email us directly at nexdev.vision@gmail.com');
        }
    }

    public function handleQuote(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'category' => 'required|string',
            'budget' => 'required|string',
            'timeline' => 'required|string',
            'description' => 'required|string',
        ]);

        try {
            Mail::to('nexdev.vision@gmail.com')->send(new QuoteMail($data));
            return back()->with('success', 'Your quote request has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Quote email error: ' . $e->getMessage());
            return back()->with('error', 'Unable to send quote request. Please email us directly at nexdev.vision@gmail.com');
        }
    }

    public function handleFeedback(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'recommend' => 'required|string',
            'public_consent' => 'nullable|string',
            'improvement' => 'required|string',
            'comments' => 'nullable|string',
        ]);

        try {
            Mail::to('nexdev.vision@gmail.com')->send(new FeedbackMail($data));
            return back()->with('success', 'Thank you for your feedback!');
        } catch (\Exception $e) {
            Log::error('Feedback email error: ' . $e->getMessage());
            return back()->with('error', 'Unable to submit feedback. Please email us directly at nexdev.vision@gmail.com');
        }
    }

    public function handleConsulting(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('nexdev.vision@gmail.com')->send(new ConsultingMail($data));
            return back()->with('success', 'Your consulting request has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Consulting email error: ' . $e->getMessage());
            return back()->with('error', 'Unable to submit consulting request. Please email us directly at nexdev.vision@gmail.com');
        }
    }
}

