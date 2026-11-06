<footer>
    <a href="https://wa.me/48579166475?text=Hi%20Nexdev%20Vision,%20I'd%20like%20to%20discuss%20a%20potential%20project%20with%20your%20team."
        class="whatsapp-btn"
        target="_blank"
        aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="container">
        <div class="footer-top">
            <div class="footer-col">
                <div class="logo mb-4" style="color: var(--primary);">NEXDEV VISION</div>
                <p style="color: #ccc;">
                    Transforming ideas into digital reality.
                    Your partner for design, development, and marketing success.
                </p>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="{{ route('web.development') }}">Development</a></li>
                    <li><a href="{{ route('graphic.design') }}">Design</a></li>
                    <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                    <li><a href="{{ route('automation') }}">Automation</a></li>
                    <li><a href="{{ route('saas') }}">SaaS</a></li>
                    <li><a href="{{ route('data.analytics') }}">Data Analytics</a></li>
                    <li><a href="{{ route('ai.engineering') }}">AI Engineering</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('consulting') }}">Consulting</a></li>
                    <li><a href="{{ route('feedback') }}">Feedback Form</a></li>
                    <li><a href="{{ route('reviews') }}">Reviews</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('quote') }}">Get a Quote</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="https://www.instagram.com/nexdevvision?srtk=MXh6MGthamc4cWo2OQ==" target="_blank" class="social-icon"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/people/Nexdev-Vision/61594560954254/?rdid=ShZzqOOCYq2RXMbZ&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F14upoT6W1Qc%2F" target="_blank" class="social-icon"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/nexdevvision?s=11" target="_blank" class="social-icon"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/nexdev-vision" target="_blank" class="social-icon"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <h4>Contact</h4>
                <ul>
                    <li><a href="tel:+18013178525"><i class="fas fa-phone me-2"></i> +1 (801) 317-8525</a></li>
                    <li><a href="mailto:nexdev.vision@gmail.com"><i class="fas fa-envelope me-2"></i> nexdev.vision@gmail.com</a></li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> 1709 East 900 South, Salt Lake City, UT 84105, United State</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom mt-4 pt-3 border-top border-secondary">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <p class="mb-0">Nexdev Vision - &copy; {{ date('Y') }} All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="{{ route('terms') }}">Terms of Service</a>
                    <span class="mx-2">|</span>
                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="{{ route('refund.policy') }}">Refund Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
