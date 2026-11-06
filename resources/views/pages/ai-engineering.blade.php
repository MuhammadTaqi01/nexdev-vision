<x-layout>
    <!-- Hero Section -->
    <section class="service-hero" style="background: url('/images/technology.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(10, 15, 30, 0.75); z-index: 1;"></div>
        <div class="container">
            <div class="service-hero-inner" style="position: relative; z-index: 2;">
                <div class="service-hero-copy">
                    <p class="badge-pill"
                        style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                        AI Engineering & Machine Learning</p>
                    <h1 class="service-hero-title" style="color: #fff;">Next-Generation AI Engineering <br class="d-none d-md-inline">
                        <span class="typing-container">
                            <span class="typing-text text-gradient" data-words='["Built For Real World Impact", "With Custom AI Agents", "Zero Hallucination RAG", "Fine-Tuned LLMs"]'>Built For Real World Impact</span><span class="typing-cursor">|</span>
                        </span>
                    </h1>
                    <p class="service-hero-subtitle" style="color: #eee;">
                        Move beyond toy demos. We engineer production-grade autonomous AI agents, enterprise Retrieval-Augmented Generation (RAG) systems, custom fine-tuned LLMs, and predictive computer vision pipelines that drive measurable business outcomes.
                    </p>
                    <div class="service-hero-actions">
                        <a href="{{ route('quote') }}" class="btn btn-primary">Build Your AI Solution</a>
                        <a href="#services" class="btn btn-outline">Explore AI Capabilities</a>
                    </div>
                </div>
                <div class="service-hero-highlight">
                    <div class="service-hero-metric">
                        <span class="metric-label">Model Inference</span>
                        <span class="metric-value">&lt; 400ms</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Architecture</span>
                        <span class="metric-value">Agentic RAG</span>
                    </div>
                    <div class="service-hero-metric">
                        <span class="metric-label">Data Privacy</span>
                        <span class="metric-value">Zero-Retention</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-5 service-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">What We Engineer</p>
                <h2 class="section-title">Production AI & Machine Learning Solutions</h2>
                <p class="section-subtitle">
                    End-to-end artificial intelligence engineering designed for security, accuracy, low latency, and cost-efficient inference.
                </p>
            </div>

            <div class="card-grid">
                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Autonomous AI Agents</h3>
                    <p>
                        Goal-directed agents that can browse web portals, query private internal databases, use software tools, and complete multi-step tasks autonomously.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Enterprise RAG Systems</h3>
                    <p>
                        Retrieval-Augmented Generation architectures with semantic vector search that allow AI to ground answers exclusively in your company's proprietary data.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <h3>Model Fine-Tuning & LLMOps</h3>
                    <p>
                        Domain-specific fine-tuning of open-source and proprietary models (Llama, Mistral, OpenAI) to master specialized enterprise vocabulary and tasks.
                    </p>
                </div>

                <div class="service-card dm-service-card">
                    <div class="icon-circle">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Computer Vision & Multimodal AI</h3>
                    <p>
                        Automated image recognition, object detection, document OCR inspection, and multimodal video analysis models for industrial and commercial use.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Solutions / Pillars -->
    <section class="py-5 recent-projects-section" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">Enterprise Architecture</p>
                <h2 class="section-title">Guaranteed Accuracy, Zero Hallucinations</h2>
                <p class="section-subtitle">
                    How our AI engineering framework solves common enterprise AI pitfalls.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Private Cloud Guardrails</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Zero-data-retention agreements, PII redacting filters, and prompt-injection defense layers to protect confidential customer data.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Optimized Token Economics</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Smart model routing (using lightweight models for simple queries and frontier models for complex reasoning) to reduce API bills by up to 70%.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="recent-project-inner" style="background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.3s ease; height: 100%;">
                        <div class="icon-circle mb-3" style="width: 50px; height: 50px; background: rgba(0,123,255,0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.25rem;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="recent-project-title" style="color: var(--text-dark); font-size: 1.25rem; margin-bottom: 0.5rem;">Fact-Checked Citations</h3>
                        <p class="recent-project-desc" style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin: 0;">Every answer includes verifiable source document references and confidence scores, completely eliminating fabricated facts and hallucinations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Process Timeline -->
    <section class="v-process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">AI Engineering Lifecycle</p>
                <h2 class="section-title text-white">From Proof-of-Concept to <span style="color: var(--primary);">Production AI</span></h2>
                <p class="section-subtitle">
                    A scientific, benchmark-driven pipeline ensuring reliable real-world performance.
                </p>
            </div>

            <div class="v-timeline-container">
                <!-- Step 1: Feasibility -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3>AI Feasibility & Benchmark Definition</h3>
                        <p class="text-white">Assessing model feasibility, defining target accuracy thresholds, latency budgets, and establishing evaluation datasets.</p>
                    </div>
                </div>

                <!-- Step 2: Data & Embedding -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>Vector Chunking & Data Pipeline</h3>
                        <p class="text-white">Parsing PDFs, internal docs, and databases into clean vector embeddings indexed into high-performance vector databases.</p>
                    </div>
                </div>

                <!-- Step 3: Model Tuning & Agent Prompting -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3>Agent Orchestration & Fine-Tuning</h3>
                        <p class="text-white">Implementing LangChain/LlamaIndex agents, multi-agent debates, custom tool call bindings, and model fine-tuning.</p>
                    </div>
                </div>

                <!-- Step 4: Red-Teaming & Evaluation -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3>Red-Teaming & Guardrail Validation</h3>
                        <p class="text-white">Simulating jailbreak attempts, hallucination stress tests, bias mitigation, and safety policy enforcement.</p>
                    </div>
                </div>

                <!-- Step 5: High-Concurrency Deployment -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>FastAPI Deployment & Streaming</h3>
                        <p class="text-white">Deploying low-latency asynchronous APIs with WebSocket streaming responses, Redis vector caches, and load balancers.</p>
                    </div>
                </div>

                <!-- Step 6: Telemetry & Continuous Learning -->
                <div class="v-timeline-item">
                    <div class="v-timeline-dot"></div>
                    <div class="v-timeline-content">
                        <div class="v-icon-box">
                            <i class="fas fa-sync"></i>
                        </div>
                        <h3>LLMOps Telemetry & Self-Improvement</h3>
                        <p class="text-white">Tracking user feedback ratings, token costs, hallucination rates, and continuously retraining models with high-value edge cases.</p>
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
                <h2 class="section-title">Engineered For ROI, Not Just Hype</h2>
                <p class="section-subtitle">
                    We deliver artificial intelligence systems designed to solve concrete business bottlenecks.
                </p>
            </div>

            <div class="process-grid mt-4">
                <div class="process-step dm-service-card">
                    <h3>Absolute Data Confidentiality</h3>
                    <p>Your proprietary company data is never used to train public models. We enforce complete isolation.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Sub-Second Response Times</h3>
                    <p>Optimized vector indexing and streaming token responses deliver seamless conversational experiences.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Agentic Action Execution</h3>
                    <p>Our agents don’t just answer questions—they can execute tasks, update databases, and send API commands.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Cost-Efficient Architectures</h3>
                    <p>Hybrid caching and dynamic prompt compression prevent runaway API token bills as usage scales.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Zero Vendor Lock-In</h3>
                    <p>Easily swap between OpenAI, Anthropic Claude, Gemini, or open-source local LLMs via unified abstractions.</p>
                </div>
                <div class="process-step dm-service-card">
                    <h3>Full Intellectual Property Ownership</h3>
                    <p>All custom models, vector databases, datasets, and integration source codes belong 100% to your company.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 tech-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <p class="section-kicker text-primary">AI & ML Stack</p>
                <h2 class="section-title">Frontier Frameworks & <span style="color: var(--primary);">Models</span></h2>
                <p class="section-subtitle">
                    State-of-the-art tooling for generative AI, agent orchestration, and machine learning infrastructure.
                </p>
            </div>

            <div class="tech-grid">
                <div class="tech-pill">Python</div>
                <div class="tech-pill">LangChain</div>
                <div class="tech-pill">LlamaIndex</div>
                <div class="tech-pill">OpenAI GPT-4o</div>
                <div class="tech-pill">Google Gemini Pro</div>
                <div class="tech-pill">Anthropic Claude 3.5</div>
                <div class="tech-pill">Pinecone</div>
                <div class="tech-pill">ChromaDB</div>
                <div class="tech-pill">PyTorch</div>
                <div class="tech-pill">Hugging Face</div>
                <div class="tech-pill">FastAPI</div>
                <div class="tech-pill">Ollama / vLLM</div>
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
                        Will our company data be used to train public AI models?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Never. We only use enterprise API contracts with strict Zero Data Retention policies (such as Azure OpenAI, AWS Bedrock, or private self-hosted open-weights models like Llama 3). Your intellectual property is never leaked or used to train general public models.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        What is RAG (Retrieval-Augmented Generation) and why do we need it?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        RAG connects an LLM directly to your live internal documents, PDFs, manuals, or databases. When an inquiry is made, the system searches your specific data for the most relevant context and gives the LLM that exact evidence to formulate its answer, preventing hallucinations and ensuring up-to-date information.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can AI agents take action directly inside our web and ERP applications?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. Using function calling and structured tool use protocols, AI agents can execute concrete actions such as sending emails, scheduling meetings, querying SQL databases, issuing support refunds, or updating customer CRM records automatically with human-in-the-loop safeguards.
                    </div>
                </div>

                <div class="faq-item" style="border-bottom: 1px solid #eee;">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        Can you integrate AI into our existing web or mobile app?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        Yes. We build lightweight RESTful and WebSocket API endpoints (in Python or Laravel) that plug seamlessly into your existing React, Vue, Flutter, iOS, or Android mobile applications without requiring complete rewrites.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-btn"
                        style="width: 100%; text-align: left; padding: 20px; background: #fff; border: none; outline: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 1.1rem; color: #333;">
                        How do you keep ongoing LLM inference costs under control?
                        <i class="fas fa-plus" style="color: var(--primary);"></i>
                    </button>
                    <div class="faq-answer d-none"
                        style="padding: 0 20px 20px; color: #666; font-size: 0.95rem; line-height: 1.6;">
                        We implement semantic caching (reusing answers for identical questions), prompt compression, and tiered model cascading (routing simple tasks to ultra-low-cost models and complex reasoning to larger frontier models).
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
                    <h2>Ready to build high-impact AI that <span style="color: var(--primary);">transforms your business?</span></h2>
                    <p>Schedule a technical AI scoping session with our lead machine learning architects. We’ll design a custom prototype blueprint.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Schedule AI Scoping</a>
                    <a href="mailto:nexdev.vision@gmail.com" class="btn btn-outline service-hero-secondary">Email Your AI Concept</a>
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
