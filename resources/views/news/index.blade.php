<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal Warga Bekasi - Berita Terbaru dan Update Informasi Kota Bekasi">
    <title>Berita Terbaru - Portal Warga Bekasi</title>
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    {{-- Vite Assets --}}
    @vite(['resources/css/portal-warga.css', 'resources/js/news.js'])
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logobekasi.jpg') }}" alt="Logo Bekasi" class="navbar-logo">
                <span>Portal Warga</span>
            </a>
            
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Toggle Menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            
            <ul class="navbar-nav" id="navbarNav">
                <li><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li><a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}">Berita</a></li>
                <li><a class="nav-link {{ request()->routeIs('complaints.*') ? 'active' : '' }}" href="{{ route('complaints.create') }}">Pengaduan</a></li>
            </ul>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                </svg>
            </div>
            <h1 class="hero-title">Berita Terbaru</h1>
            <p class="hero-subtitle">Update informasi dan pengumuman terkini dari Kota Bekasi</p>
            <div class="hero-decoration"></div>
        </div>
    </section>

    {{-- Main Content --}}
    <div class="container">
        {{-- Featured News Badge --}}
        <div class="featured-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            <span>Berita Utama</span>
        </div>

        {{-- Featured News Card --}}
        <article class="featured-card">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1200&h=600&fit=crop" 
                 alt="Pembangunan LRT Bekasi" 
                 class="featured-image"
                 loading="lazy">
            <div class="featured-content">
                <div class="featured-meta">
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>10 November 2025</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Bekasi</span>
                    </div>
                </div>
                <h2 class="featured-title">Proyek LRT Jabodebek Fase 2 Dimulai, Bekasi Makin Terhubung</h2>
                <p class="featured-excerpt">
                    Pemerintah Kota Bekasi mengumumkan dimulainya pembangunan fase kedua LRT Jabodebek yang akan menghubungkan lebih banyak wilayah di Bekasi dengan Jakarta. Proyek ini diharapkan dapat mengurangi kemacetan dan meningkatkan mobilitas warga. Pembangunan ditargetkan selesai pada tahun 2027 dengan total investasi mencapai Rp 15 triliun. Rute baru akan meliputi kawasan Summarecon, Harapan Indah, hingga Grand Galaxy City.
                </p>
                <a href="#" class="btn-read" onclick="openModal(0); return false;">
                    <span>Baca Selengkapnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </article>

        {{-- Section Header --}}
        <div class="section-header">
            <h3 class="section-title">Semua Berita</h3>
            <div class="news-count">8 Artikel</div>
        </div>

        {{-- News Grid --}}
        <div class="news-grid" id="newsGrid"></div>
    </div>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Portal Warga Bekasi. Dibuat untuk kemudahan warga.</p>
            <p class="footer-subtitle">Melayani dengan sepenuh hati untuk Bekasi yang lebih baik</p>
        </div>
    </footer>

    {{-- Modal --}}
    <div class="modal" id="newsModal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal()" aria-label="Tutup">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <img id="modalImage" src="" alt="" class="modal-image" loading="lazy">
            <div class="modal-body">
                <div class="featured-meta" id="modalMeta"></div>
                <h2 class="modal-title" id="modalTitle"></h2>
                <div id="modalContent"></div>
            </div>
        </div>
    </div>

</body>
</html>