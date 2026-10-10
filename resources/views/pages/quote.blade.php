<x-layout>
    <!-- Quote Hero -->
    <section class="service-hero" style="background: url('/images/get-quote.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Free Project Estimate</p>
                <h1 class="service-hero-title" style="color: #fff;">Get a Specialized <span
                        style="color: var(--primary);">Quote</span></h1>
                <p style="color: #eee;">Ready to start your journey? Provide us with some details about your project,
                    and our team will get back to you with a tailored proposal and estimate.</p>
            </div>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div
                        style="background: #fff; border: 1px solid #eee; border-radius: 30px; padding: 50px; box-shadow: 0 20px 60px rgba(0,0,0,0.05); overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: var(--primary);">
                        </div>

                        <div class="text-center mb-5">
                            <p class="section-kicker text-primary">Tailored Solutions</p>
                            <h2 class="section-title">Tell Us About Your Project</h2>
                            @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>

                        <form action="{{ route('quote.submit') }}" method="POST" id="quoteForm">

                            @csrf
                            <!-- Contact Details -->
                            <div class="form-section mb-5">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter your name" required
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Email Address</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter your email" required
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Enter phone number"
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Company Name
                                            (Optional)</label>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Your brand or agency"
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Service Category</label>
                                        <select name="category" class="form-select" required
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                            <option value="" disabled selected>Select a category</option>
                                            <option value="web-development">Web Development</option>
                                            <option value="graphic-design">Graphic Design</option>
                                            <option value="digital-marketing">Digital Marketing</option>
                                            <option value="ms-office-solutions">MS Office Solutions</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Estimated Budget</label>
                                        <select name="budget" class="form-select" required
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                            <option value="" disabled selected>Choose a range</option>
                                            <option value="under-1k">Under $1,000</option>
                                            <option value="1k-5k">$1,000 - $5,000</option>
                                            <option value="5k-10k">$5,000 - $10,000</option>
                                            <option value="10k-25k">$10,000 - $25,000</option>
                                            <option value="above-25k">$25,000+</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" style="font-weight: 600;">Project Timeline</label>
                                        <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-top: 5px;">
                                            <div class="timeline-radio">
                                                <input type="radio" name="timeline" id="urgent" value="urgent"
                                                    style="display:none;">
                                                <label for="urgent"
                                                    style="cursor:pointer; border:1px solid #eee; padding: 10px 20px; border-radius: 30px; font-weight: 600; color: #666; transition: 0.3s;">Urgent
                                                    (1-2 weeks)</label>
                                            </div>
                                            <div class="timeline-radio">
                                                <input type="radio" name="timeline" id="standard" value="standard"
                                                    checked style="display:none;">
                                                <label for="standard"
                                                    style="cursor:pointer; border:1px solid #eee; padding: 10px 20px; border-radius: 30px; font-weight: 600; color: #666; transition: 0.3s;">Standard
                                                    (4-8 weeks)</label>
                                            </div>
                                            <div class="timeline-radio">
                                                <input type="radio" name="timeline" id="long-term" value="long-term"
                                                    style="display:none;">
                                                <label for="long-term"
                                                    style="cursor:pointer; border:1px solid #eee; padding: 10px 20px; border-radius: 30px; font-weight: 600; color: #666; transition: 0.3s;">Long-term
                                                    / Retainer</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label class="form-label" style="font-weight: 600;">What are your main
                                                goals?</label>
                                            <textarea name="description" class="form-control" rows="6"
                                                placeholder="Please provide as much detail as possible about your requirements, features, and expectations."
                                                required
                                                style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"
                                    style="width: 100%; padding: 15px; font-weight: 700; border-radius: 10px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
                                    Submit Quote Request <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                                <p style="color: #666; margin-top: 20px; font-size: 0.9rem;">We respect your privacy.
                                    All information provided is strictly confidential.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Styles -->
    <style>
        .timeline-radio input:checked+label {
            background: var(--primary) !important;
            color: #fff !important;
            border-color: var(--primary) !important;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: none;
            background: #fff;
        }
    </style>
</x-layout>