<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;
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
    ];
    public function index()
    {
        SEOMeta::setTitle('Nexdev Vision | Web & Graphic Solutions');
        SEOMeta::setDescription('Welcome to the home page of our Nexdev Vision site.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.index');
    }

    public function consulting()
    {
        SEOMeta::setTitle('Nexdev Vision | Web & Graphic Solutions');
        SEOMeta::setDescription('Welcome to the home page of our Nexdev Vision site.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.consulting');
    }

    public function contactus()
    {
        SEOMeta::setTitle('Nexdev Vision | Web & Graphic Solutions');
        SEOMeta::setDescription('Welcome to the home page of our Nexdev Vision site.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.contactus');
    }

    public function logoDesign()
    {
        SEOMeta::setTitle('Nexdev Vision | Web & Graphic Solutions');
        SEOMeta::setDescription('Welcome to the home page of our Nexdev Vision site.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.logodesign');
    }

    public function pricing()
    {
        SEOMeta::setTitle('Nexdev Vision | Pricing');
        SEOMeta::setDescription('Choose the plan that fits your business needs.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.pricing');
    }

    public function webDevelopment()
    {
        SEOMeta::setTitle('Nexdev Vision | Web Development Services');
        SEOMeta::setDescription('Custom web development solutions that help your business grow with fast, secure and scalable websites and web applications.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.web-development');
    }

    public function graphicDesign()
    {
        SEOMeta::setTitle('Nexdev Vision | Graphic Design Services');
        SEOMeta::setDescription('Creative graphic designs that build strong brand identity across digital and print.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.graphic-design');
    }

    public function digitalMarketingPage()
    {
        SEOMeta::setTitle('Nexdev Vision | Digital Marketing Services');
        SEOMeta::setDescription('Grow your business with smart digital marketing strategies that deliver measurable results and higher ROI.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.digital-marketing');
    }

    public function msOffice()
    {
        SEOMeta::setTitle('Nexdev Vision | MS Office Solutions');
        SEOMeta::setDescription('Smart MS Office solutions for efficient business operations, automation and reporting.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.ms-office');
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
        SEOMeta::setTitle('Nexdev Vision | Get a Professional Quote');
        SEOMeta::setDescription('Request a custom quote for your digital project. We provide detailed estimates for web development, design, and marketing.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.quote');
    }

    public function feedback()
    {
        SEOMeta::setTitle('Nexdev Vision | Share Your Experience');
        SEOMeta::setDescription('We value your feedback. Let us know how we can improve our services and share your success stories.');
        SEOMeta::addMeta('robots', 'index,follow');

        return view('pages.feedback');
    }

    public function reviews()
    {
        SEOMeta::setTitle('Nexdev Vision | Client Reviews & Testimonials');
        SEOMeta::setDescription('Discover what our clients say about Nexdev Vision. Read authentic reviews and success stories from businesses we have helped grow.');
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
        SEOMeta::setTitle('About Us | Nexdev Vision');
        SEOMeta::setDescription('Discover the story of Nexdev Vision. With over 13 years of experience, we provide premium digital solutions to help businesses grow globally.');
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

    public function handleContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('nexdev.vision@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
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

        Mail::to('nexdev.vision@gmail.com')->send(new QuoteMail($data));

        return back()->with('success', 'Your quote request has been submitted successfully!');
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

        Mail::to('nexdev.vision@gmail.com')->send(new FeedbackMail($data));

        return back()->with('success', 'Thank you for your feedback!');
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

        Mail::to('nexdev.vision@gmail.com')->send(new ConsultingMail($data));

        return back()->with('success', 'Your consulting request has been submitted successfully!');
    }
}

