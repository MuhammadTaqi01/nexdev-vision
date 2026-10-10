<header>
    <div class="container">
        <a href="{{ route('nvlanding') }}" class="logo text-gradient"
            style="display: flex; justify-content: center; align-items: center;">
            <img src="/images/logo.png" alt="">
        </a>

        <button class="menu-toggle" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <nav class="main-nav">
            <ul>
                <li><a href="{{ route('web.development') }}">Web Development</a></li>
                <li><a href="{{ route('graphic.design') }}">Graphic Design</a></li>
                <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                <li><a href="{{ route('ms.office') }}">MS Office Solutions</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('quote') }}" class="btn btn-primary" style="padding: 8px 20px; color: #fff;">Let's
                        Talk</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('.main-nav');

        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', () => {
                mainNav.classList.toggle('active');
                const icon = menuToggle.querySelector('i');
                if (mainNav.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        }
    });
</script>