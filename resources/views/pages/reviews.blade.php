<x-layout>
    <!-- Reviews Hero -->
    <section class="service-hero" style="background: url('/images/reviews.jpg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div style="text-align:center; max-width:900px; margin:0 auto;">
                <p class="badge-pill"
                    style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    Wall of Love</p>
                <h1 class="service-hero-title" style="color: #fff;">Client Success <span
                        style="color: var(--primary);">Stories</span></h1>
                <p style="color: #eee;">Authentic feedback from businesses that have grown with Nexdev Vision. Your
                    success is our biggest achievement.</p>
            </div>
        </div>
    </section>

    <!-- Reviews Grid Section -->
    <section class="py-5" style="background: #fcfcfc;">
        <div class="container">
            <div class="text-center mb-5">
                <p class="section-kicker text-primary">Testimonials</p>
                <h2 class="section-title">Verified Reviews</h2>
            </div>

            <div class="row g-5">
                @foreach($testimonials as $review)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="review-card-minimal">
                            <div class="review-top-meta">
                                <h4 class="client-name-minimal">{{ $review['name'] }}</h4>
                                <span class="review-date-minimal">{{ $review['date'] }}</span>
                            </div>
                            <div class="review-rating-minimal mb-3">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star"
                                        style="color: {{ $i <= $review['rating'] ? 'var(--primary)' : '#ddd' }}; font-size: 0.9rem;"></i>
                                @endfor
                            </div>
                            <div class="review-content-minimal">
                                <p>{{ $review['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 final-cta-section">
        <div class="container">
            <div class="final-cta-inner">
                <div>
                    <h2>Ready to Start Your <span style="color: var(--primary);">Success Story?</span></h2>
                    <p>Let's build something extraordinary together. Join the growing list of happy clients.
                    </p>
                </div>
                <div class="final-cta-actions">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Get a Quote</a>
                    <a href="{{ route('feedback') }}" class="btn btn-outline service-hero-secondary">Share Feedback</a>
                </div>
            </div>
        </div>
    </section>

</x-layout>