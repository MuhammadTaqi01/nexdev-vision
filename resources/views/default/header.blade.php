<header>
    <div class="container">
        <a href="{{ route('nvlanding') }}" class="logo"
            style="display: flex; justify-content: center; align-items: center;">
            <img src="/images/logo.png" alt="Nexdev Vision">
        </a>

        <button class="menu-toggle" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <nav class="main-nav">
            <ul>
                <li class="nav-item"><a href="{{ route('nvlanding') }}" class="{{ request()->routeIs('nvlanding') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li class="nav-item dropdown {{ request()->is('services*') || request()->routeIs('web.development') || request()->routeIs('graphic.design') || request()->routeIs('digital.marketing') || request()->routeIs('service.*') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="dropdown-toggle-link" role="button" aria-expanded="false">
                        Services <i class="fas fa-chevron-down ms-1" style="font-size: 0.75rem;"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('web.development') }}"><i class="fas fa-code"></i> Development</a></li>
                        <li><a href="{{ route('graphic.design') }}"><i class="fas fa-palette"></i> Design</a></li>
                        <li><a href="{{ route('digital.marketing') }}"><i class="fas fa-bullhorn"></i> Digital Marketing</a></li>
                        <li><a href="{{ route('automation') }}"><i class="fas fa-cogs"></i> Automation</a></li>
                        <li><a href="{{ route('saas') }}"><i class="fas fa-cloud"></i> SaaS</a></li>
                        <li><a href="{{ route('data.analytics') }}"><i class="fas fa-chart-line"></i> Data Analytics</a></li>
                        <li><a href="{{ route('ai.engineering') }}"><i class="fas fa-brain"></i> AI Engineering</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('contactus') }}" class="{{ request()->routeIs('contactus') ? 'active' : '' }}">Contact Us</a></li>
                <li><a href="{{ route('quote') }}" class="btn btn-primary" style="padding: 8px 20px; color: #fff;">Let's Talk</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    /* Navigation & Dropdown Styling */
    .main-nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .main-nav .dropdown {
        position: relative;
    }

    .main-nav .dropdown-toggle-link {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: color 0.2s ease;
    }

    .main-nav .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: #ffffff;
        min-width: 240px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        padding: 8px 0;
        margin: 10px 0 0 0;
        list-style: none;
        display: none;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
        z-index: 1050;
    }

    /* Open on hover on desktop */
    @media (min-width: 769px) {
        .main-nav .dropdown:hover > .dropdown-menu {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }
    }

    /* Open when .open class is added (click/touch) */
    .main-nav .dropdown.open > .dropdown-menu {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
    }

    .main-nav .dropdown-menu li {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .main-nav .dropdown-menu li a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 20px;
        color: #333333;
        font-size: 0.9rem;
        font-weight: 500;
        text-transform: none;
        transition: background 0.2s ease, color 0.2s ease, padding-left 0.2s ease;
        width: 100%;
    }

    .main-nav .dropdown-menu li a i {
        width: 18px;
        text-align: center;
        color: var(--primary, #007bff);
        font-size: 0.95rem;
        transition: transform 0.2s ease;
    }

    .main-nav .dropdown-menu li a:hover {
        background: #f8f9fa;
        color: var(--primary, #007bff);
        padding-left: 24px;
    }

    .main-nav .dropdown-menu li a:hover i {
        transform: scale(1.15);
    }

    .main-nav a.active,
    .main-nav .dropdown.active > .dropdown-toggle-link {
        color: var(--primary, #007bff);
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .main-nav .dropdown {
            width: 100%;
            text-align: center;
        }

        .main-nav .dropdown-toggle-link {
            justify-content: center;
        }

        .main-nav .dropdown-menu {
            position: static !important;
            float: none;
            width: 90%;
            margin: 10px auto;
            box-shadow: none;
            border: 1px solid #e9ecef;
            border-left: 3px solid var(--primary, #007bff);
            border-top: 1px solid #e9ecef;
            background: #f8f9fa;
            border-radius: 8px;
            transform: none !important;
            display: none;
        }

        .main-nav .dropdown.open > .dropdown-menu {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .main-nav .dropdown-menu li a {
            justify-content: flex-start;
            padding: 9px 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('.main-nav');
        const dropdown = document.querySelector('.main-nav .dropdown');
        const dropdownToggle = document.querySelector('.dropdown-toggle-link');

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

        if (dropdown && dropdownToggle) {
            dropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                dropdown.classList.toggle('open');
                const arrow = dropdownToggle.querySelector('i.fa-chevron-down, i.fa-chevron-up');
                if (arrow) {
                    if (dropdown.classList.contains('open')) {
                        arrow.classList.remove('fa-chevron-down');
                        arrow.classList.add('fa-chevron-up');
                    } else {
                        arrow.classList.remove('fa-chevron-up');
                        arrow.classList.add('fa-chevron-down');
                    }
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('open');
                    const arrow = dropdownToggle.querySelector('i.fa-chevron-up');
                    if (arrow) {
                        arrow.classList.remove('fa-chevron-up');
                        arrow.classList.add('fa-chevron-down');
                    }
                }
            });
        }
    });
</script>
