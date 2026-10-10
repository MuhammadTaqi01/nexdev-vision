<x-layout>
    <!-- Feedback Hero -->
    <section class="service-hero" style="background: url('/images/feedback.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Client Voices</p>
                <h1 class="service-hero-title" style="color: #fff;">Share Your <span
                        style="color: var(--primary);">Experience</span></h1>
                <p style="color: #eee;">Your feedback drives our innovation. Help us shape the future of our services by
                    sharing your thoughts on your journey with Nexdev Vision.</p>
            </div>
        </div>
    </section>

    <!-- Feedback Form Section -->
    <section class="py-5" style="background: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div
                        style="background: #fff; border-radius: 30px; padding: 50px; box-shadow: 0 20px 60px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <div class="text-center mb-5">
                            <p class="section-kicker text-primary">Your Opinion Matters</p>
                            <h2 class="section-title">Share Your Feedback With Us</h2>
                            @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('feedback.submit') }}" method="POST" id="feedbackForm">

                            @csrf
                            <!-- Persona Information -->
                            <div class="mb-5">
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
                                        <label class="form-label" style="font-weight: 600;">Position/Title</label>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="e.g. CEO, Marketing Manager"
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">Company Name</label>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Your organization"
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-weight: 600;">How would you rate our
                                            overall service?</label>
                                        <div>
                                            <div class="star-rating">
                                                <input type="radio" name="rating" id="star5" value="5"
                                                    style="display:none;"><label for="star5" title="Amazing"><i
                                                        class="fas fa-star"></i></label>
                                                <input type="radio" name="rating" id="star4" value="4"
                                                    style="display:none;"><label for="star4" title="Good"><i
                                                        class="fas fa-star"></i></label>
                                                <input type="radio" name="rating" id="star3" value="3"
                                                    style="display:none;"><label for="star3" title="Average"><i
                                                        class="fas fa-star"></i></label>
                                                <input type="radio" name="rating" id="star2" value="2"
                                                    style="display:none;"><label for="star2" title="Poor"><i
                                                        class="fas fa-star"></i></label>
                                                <input type="radio" name="rating" id="star1" value="1"
                                                    style="display:none;"><label for="star1" title="Very Bad"><i
                                                        class="fas fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" style="font-weight: 600;">Would you recommend our
                                            services to others?</label>
                                        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                                            <div class="recommend-option">
                                                <input type="radio" name="recommend" id="rec_yes" value="yes" checked
                                                    style="display:none;">
                                                <label for="rec_yes" class="pill-btn">Yes, Absolutely</label>
                                            </div>
                                            <div class="recommend-option">
                                                <input type="radio" name="recommend" id="rec_maybe" value="maybe"
                                                    style="display:none;">
                                                <label for="rec_maybe" class="pill-btn">Maybe</label>
                                            </div>
                                            <div class="recommend-option">
                                                <input type="radio" name="recommend" id="rec_no" value="no"
                                                    style="display:none;">
                                                <label for="rec_no" class="pill-btn">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="checkbox" name="public_consent"
                                            id="public_consent" style="cursor:pointer;">
                                        <label class="form-label" style="font-weight: 600;">I consent to having this
                                            feedback featured as a public testimonial.</label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" style="font-weight: 600;">How can we improve our
                                            service
                                            more? Please be blunt!</label>
                                        <textarea name="improvement" class="form-control" rows="4"
                                            placeholder="Your honest suggestions..." required
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" style="font-weight: 600;">Any other comments?</label>
                                        <textarea name="comments" class="form-control" rows="4"
                                            placeholder="Tell us more about your experience..."
                                            style="padding: 15px; border-radius: 12px; border: 1px solid #eee; background: #fcfcfc;"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"
                                    style="width: 100%; padding: 15px; font-weight: 700; border-radius: 10px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
                                    Submit Feedback <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                                <p style="color: #888; margin-top: 20px; font-size: 0.85rem;">Thank you for your time.
                                    Your input is invaluable to us.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 10px;
        }

        .star-rating label {
            font-size: 2.5rem;
            color: #ddd;
            cursor: pointer;
            transition: 0.3s;
        }

        .star-rating input:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: var(--primary);
            /* Using the Cyan color */
        }

        .pill-btn {
            display: inline-block;
            padding: 10px 25px;
            border-radius: 30px;
            border: 1px solid #eee;
            background: #fff;
            color: #666;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .recommend-option input:checked+label {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
    </style>
</x-layout>