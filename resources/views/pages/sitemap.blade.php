<x-layout>
    <!-- Sitemap Hero -->
    <section class="service-hero">
        <div class="container">
            <div style="text-align:center; max-width:800px; margin:0 auto;">
                <h1>Site Map</h1>
                <p>A comprehensive guide to everything on the Nexdev Vision website. Easily find
                    the services and information you need.</p>
            </div>
        </div>
    </section>

    <!-- Sitemap Content -->
    <section>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="sitemap-group">
                        <h3 class="sitemap-group-title">Our Company</h3>
                        <ul class="sitemap-list">
                            <li><a href="{{ route('nvlanding') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                            <li><a href="{{ route('reviews') }}">Client Reviews</a></li>
                            <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                            <li><a href="{{ route('consulting') }}">Consulting</a></li>
                            <li><a href="{{ route('quote') }}">Get a Quote</a></li>
                            <li><a href="{{ route('feedback') }}">Feedback Form</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sitemap-group">
                        <h3 class="sitemap-group-title">Our Services</h3>
                        <ul class="sitemap-list">
                            <li><a href="{{ route('web.development') }}">Web Development</a></li>
                            <li><a href="{{ route('graphic.design') }}">Graphic Design</a></li>
                            <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                            <li><a href="{{ route('ms.office') }}">MS Office Solutions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sitemap-group">
                        <h3 class="sitemap-group-title">Legal & Resources</h3>
                        <ul class="sitemap-list">
                            <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>