<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Portal Warga - Sistem Informasi Terpadu untuk Kemudahan Warga Bekasi">
    <meta name="theme-color" content="#667eea">
    <meta name="author" content="Haical Ravinda">
    <title>{{ isset($title) ? $title . ' - ' : '' }}Portal Warga Bekasi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')

    <style>
        /* ==========================================
           ENHANCED STYLES - PORTAL WARGA
           Modern, Clean & Responsive Design
           ========================================== */

        :root {
            /* Color Palette */
            --primary: #667eea;
            --primary-dark: #5568d3;
            --primary-light: #818cf8;
            --secondary: #764ba2;
            --accent: #f093fb;
            
            /* Text Colors */
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --text-light: #cbd5e1;
            
            /* Background Colors */
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            
            /* Border & Shadow */
            --border-color: #e2e8f0;
            --border-light: #f1f5f9;
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.12);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.15);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.2);
            
            /* Border Radius */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --radius-2xl: 24px;
            
            /* Transitions */
            --transition-fast: 150ms ease;
            --transition-base: 250ms ease;
            --transition-slow: 350ms ease;
        }

        /* Reset & Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(240, 147, 251, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(118, 75, 162, 0.03) 0%, transparent 50%);
            z-index: -1;
            animation: bgPulse 20s ease-in-out infinite;
        }

        @keyframes bgPulse {
            0%, 100% {
                opacity: 0.5;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        /* Selection Style */
        ::selection {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-tertiary);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
            border: 3px solid var(--bg-tertiary);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary));
        }

        /* ==========================================
           NAVBAR - Enhanced Glassmorphism
           ========================================== */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            transition: all var(--transition-base);
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-inner {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 clamp(1rem, 3vw, 2rem);
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 70px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            transition: all var(--transition-base);
            position: relative;
        }

        .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-brand:hover::after {
            width: 100%;
        }

        .navbar-logo {
            width: 45px;
            height: 45px;
            border-radius: var(--radius-md);
            background: white;
            padding: 4px;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
            transition: all var(--transition-base);
            object-fit: contain;
        }

        .navbar-brand:hover .navbar-logo {
            transform: rotate(-5deg) scale(1.08);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            gap: 0.5rem;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 600;
            padding: 0.625rem 1.25rem;
            border-radius: var(--radius-md);
            transition: all var(--transition-base);
            font-size: 0.9375rem;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.15), transparent);
            transition: left 0.5s;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            color: var(--primary);
            background: rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .nav-link.active {
            color: white;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            font-weight: 700;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            color: var(--text-secondary);
            font-size: 1.5rem;
            transition: all var(--transition-base);
        }

        .mobile-menu-toggle:hover {
            color: var(--primary);
            transform: scale(1.1);
        }

        /* ==========================================
           CONTAINER
           ========================================== */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: clamp(2rem, 5vw, 3rem) clamp(1rem, 3vw, 2rem);
            flex: 1;
        }

        /* ==========================================
           ALERTS - Enhanced with Icons
           ========================================== */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            margin: 1.5rem 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            animation: slideInRight 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
        }

        .alert-success {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            color: #065f46;
            border: 1px solid #86efac;
        }

        .alert-success::before {
            background: #10b981;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            color: #991b1b;
            border: 1px solid #fca5a5;
        }

        .alert-danger::before {
            background: #ef4444;
        }

        .alert-info {
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            color: #1e3a8a;
            border: 1px solid #93c5fd;
        }

        .alert-info::before {
            background: #3b82f6;
        }

        .alert-close {
            margin-left: auto;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.25rem;
            opacity: 0.6;
            transition: opacity var(--transition-fast);
            font-size: 1.25rem;
            line-height: 1;
        }

        .alert-close:hover {
            opacity: 1;
        }

        /* ==========================================
           FOOTER - Enhanced Design
           ========================================== */
        footer {
            background: white;
            border-top: 1px solid var(--border-color);
            margin-top: auto;
            padding: 3rem 0;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 clamp(1rem, 3vw, 2rem);
            text-align: center;
        }

        .footer-text {
            color: var(--text-secondary);
            font-size: 0.9375rem;
            margin-bottom: 0.5rem;
        }

        .footer-brand {
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-link {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.875rem;
            transition: color var(--transition-base);
        }

        .footer-link:hover {
            color: var(--primary);
        }

        /* ==========================================
           RESPONSIVE DESIGN
           ========================================== */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .navbar-nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                border-top: 1px solid var(--border-color);
                gap: 0.25rem;
            }

            .navbar-nav.active {
                display: flex;
                animation: slideDown 0.3s ease;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .nav-link {
                width: 100%;
                text-align: center;
                padding: 0.875rem 1rem;
            }

            .navbar-inner {
                padding: 0 1rem;
            }

            .navbar-brand {
                font-size: 1.25rem;
            }

            .navbar-logo {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            .navbar-brand span {
                display: none;
            }

            .alert {
                padding: 0.875rem 1rem;
                font-size: 0.875rem;
            }
        }

        /* ==========================================
           UTILITY CLASSES
           ========================================== */
        .text-gradient {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .shadow-glow {
            box-shadow: 0 0 30px rgba(102, 126, 234, 0.3);
        }

        .fade-in {
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* ==========================================
           LOADING STATE
           ========================================== */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            z-index: 9999;
            transform-origin: left;
            animation: loading 1.5s ease-in-out infinite;
        }

        @keyframes loading {
            0% {
                transform: scaleX(0);
            }
            50% {
                transform: scaleX(0.5);
            }
            100% {
                transform: scaleX(1);
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logobekasi.jpg') }}" alt="Logo Bekasi" class="navbar-logo">
                <span>Portal Warga</span>
            </a>
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Toggle Menu">
                ☰
            </button>
            <ul class="navbar-nav" id="navbarNav">
                <li><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li><a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}">Berita</a></li>
                <li><a class="nav-link {{ request()->routeIs('complaints.*') ? 'active' : '' }}" href="{{ route('complaints.create') }}">Pengaduan</a></li>
            </ul>
        </div>
    </nav>

    <!-- Flash Messages -->
    <div class="container">
        @foreach (['success', 'error', 'info'] as $msg)
            @if(session($msg))
                <div class="alert alert-{{ $msg }}" role="alert">
                    <span>{{ session($msg) }}</span>
                    <button class="alert-close" onclick="this.parentElement.remove()">×</button>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="footer-text">
                © {{ date('Y') }} <span class="footer-brand">Portal Warga Bekasi</span>
            </p>
            <p class="footer-text">
                Dibuat dengan ❤️ oleh <strong>Haical Ravinda</strong> untuk kemudahan warga
            </p>
            <div class="footer-links">
                <a href="#" class="footer-link">Tentang</a>
                <a href="#" class="footer-link">Kontak</a>
                <a href="#" class="footer-link">Kebijakan Privasi</a>
                <a href="#" class="footer-link">Bantuan</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const nav = document.getElementById('navbarNav');
            nav.classList.toggle('active');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const nav = document.getElementById('navbarNav');
            const toggle = document.querySelector('.mobile-menu-toggle');
            const navbar = document.querySelector('.navbar');
            
            if (!navbar.contains(event.target) && nav.classList.contains('active')) {
                nav.classList.remove('active');
            }
        });

        // Navbar scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Auto dismiss alerts
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.animation = 'slideInRight 0.3s ease reverse';
                    setTimeout(() => alert.remove(), 300);
                }, 5000);
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Add fade-in animation to elements when they come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.card, .section, article');
            elements.forEach(el => observer.observe(el));
        });

        // Performance: Preload images
        window.addEventListener('load', function() {
            const images = document.querySelectorAll('img[data-src]');
            images.forEach(img => {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        });
    </script>

    @stack('scripts')
</body>
</html>