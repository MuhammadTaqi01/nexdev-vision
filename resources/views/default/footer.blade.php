<footer>
    <a href="https://wa.me/923103445678?text=Hello%20Nexdev%20Vision,%20I%20would%20like%20to%20get%20a%20quote%20for%20my%20project."
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
                    <li><a href="{{ route('web.development') }}">Web Development</a></li>
                    <li><a href="{{ route('graphic.design') }}">Graphic Design</a></li>
                    <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                    <li><a href="{{ route('ms.office') }}">MS Office Solutions</a></li>
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
                    <a href="https://instagram.com/nexdevvision" target="_blank" class="social-icon"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://facebook.com/nexdevvision" target="_blank" class="social-icon"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/nexdevvision" target="_blank" class="social-icon"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com/company/nexdevvision" target="_blank" class="social-icon"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <h4>Contact</h4>
                <ul>
                    <li><a href="tel:+923102166745"><i class="fas fa-phone me-2"></i> +92-310-2166745</a></li>
                    <li><a href="mailto:support@nexdevvision.com"><i class="fas fa-envelope me-2"></i> support@nexdevvision.com</a></li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Karachi, Pakistan</li>
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
                </div>
            </div>
        </div>
    </div>
</footer>