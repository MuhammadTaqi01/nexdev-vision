<x-layout>
    <!-- Contact Hero -->
    <section class="service-hero" style="background: url('/images/contact-us.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Connect With Us</p>
                <h1 class="service-hero-title" style="color: #fff;">Let's Bring Your <span
                        style="color: var(--primary);">Vision To Life</span></h1>
                <p style="color: #eee;">Have a question or a project in mind? Reach out to our team of experts and let's
                    discuss how we can help you grow.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div style="padding-right: 30px;">
                        <p class="section-kicker text-primary">Get in touch</p>
                        <h2 class="section-title" style="text-align: left; margin-bottom: 25px;">Contact Information
                        </h2>
                        <p style="color: #666; margin-bottom: 35px;">Whether you're looking for a consultation, have a
                            technical query, or just want to say hello, we're here to listen and respond.</p>

                        <div class="contact-methods">
                            <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px;">
                                <div
                                    style="width: 50px; height: 50px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #eee;">
                                    <i class="fas fa-map-marker-alt"
                                        style="color: var(--primary); font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 5px;">Our Office</h4>
                                    <p style="color: #666; margin: 0;">Karachi, Pakistan</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px;">
                                <div
                                    style="width: 50px; height: 50px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #eee;">
                                    <i class="fas fa-phone-alt" style="color: var(--primary); font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 5px;">Call Us</h4>
                                    <p style="color: #666; margin: 0;">+92-310-2166745</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px;">
                                <div
                                    style="width: 50px; height: 50px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #eee;">
                                    <i class="fas fa-envelope" style="color: var(--primary); font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 5px;">Email Us</h4>
                                    <p style="color: #666; margin: 0;">support@nexdevvision.com</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 20px;">
                                <div
                                    style="width: 50px; height: 50px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #eee;">
                                    <i class="fas fa-clock" style="color: var(--primary); font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 5px;">Business Hours
                                    </h4>
                                    <p style="color: #666; margin: 0;">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div
                        style="background: #fff; border: 1px solid #eee; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <h3 style="font-weight: 800; margin-bottom: 30px;">Send Us a Message</h3>
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contactus.submit') }}" method="POST" id="contactForm">

                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600;">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                        required style="padding: 12px; border-radius: 8px; border: 1px solid #ddd;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600;">Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                        required style="padding: 12px; border-radius: 8px; border: 1px solid #ddd;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600;">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control"
                                        placeholder="Enter your phone number"
                                        style="padding: 12px; border-radius: 8px; border: 1px solid #ddd;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600;">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Enter subject"
                                        required style="padding: 12px; border-radius: 8px; border: 1px solid #ddd;">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="font-weight: 600;">Message</label>
                                    <textarea name="message" class="form-control" rows="5"
                                        placeholder="Tell us about your project..." required
                                        style="padding: 12px; border-radius: 8px; border: 1px solid #ddd;"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary"
                                        style="width: 100%; padding: 15px; font-weight: 700; border-radius: 10px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
                                        Send Message <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>