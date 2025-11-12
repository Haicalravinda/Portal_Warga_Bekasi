@extends('layouts.app')

@section('content')
<!-- Hero Section with Logo -->
<div class="hero-section">
    <div class="hero-content">
        <div class="logo-container">
            <img src="{{ asset('img/logobekasi.jpg') }}" alt="Logo Bekasi" class="hero-logo">
        </div>
        <h1 class="hero-title">Portal Warga Bekasi</h1>
        <p class="hero-subtitle">Sistem Informasi Terpadu untuk Kemudahan Warga</p>
        <div class="hero-decoration"></div>
    </div>
</div>

<div class="container">
    
    <!-- Stats Overview Section -->
    <div class="stats-section">
        <div class="section-header">
            <h2>Informasi Penting</h2>
            <div class="section-line"></div>
        </div>
        
        <div class="card-grid">
            <!-- Jadwal Kerja Bakti Card -->
            <div class="info-card schedule-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <h3>Jadwal Kerja Bakti</h3>
                <div class="schedule-info">
                    <p class="schedule-date">{{ $workSchedule }}</p>
                </div>
                <p class="card-description">Ikuti jadwal untuk menjaga kebersihan lingkungan</p>
            </div>

            <!-- Quick Action Cards -->
            <div class="action-card primary-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h3>Buat Pengaduan</h3>
                <p class="card-description">Ada masalah atau keluhan? Laporkan melalui sistem pengaduan kami</p>
                <a href="{{ route('complaints.create') }}" class="btn btn-primary">
                    <span>Buat Pengaduan</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <div class="action-card secondary-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3>Berita Terkini</h3>
                <p class="card-description">Lihat informasi dan pengumuman terbaru dari Kota Bekasi</p>
                <a href="{{ route('news.index') }}" class="btn btn-secondary">
                    <span>Lihat Berita</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Featured News Highlight -->
    @if($news->count() > 0)
    <div class="featured-news-section">
        <div class="section-header">
            <div class="header-badge">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <span>Berita Utama</span>
            </div>
            <h2>Sorotan Berita</h2>
            <p>Update terbaru dan terpenting dari Kota Bekasi</p>
            <div class="section-line"></div>
        </div>

        <article class="featured-news-card">
            <div class="featured-news-image">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1200&h=600&fit=crop" 
                     alt="{{ $news->first()->title }}" 
                     loading="lazy">
                <div class="image-overlay">
                    <div class="featured-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        Berita Pilihan
                    </div>
                </div>
            </div>
            <div class="featured-news-content">
                <div class="news-meta">
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>{{ $news->first()->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Bekasi</span>
                    </div>
                </div>
                <h3 class="featured-news-title">{{ $news->first()->title }}</h3>
                <p class="featured-news-excerpt">{{ Str::limit($news->first()->content, 200) }}</p>
                <a href="{{ route('news.show', $news->first()->id) }}" class="btn-read-featured">
                    <span>Baca Selengkapnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </article>
    </div>
    @endif

    <!-- Latest News Grid -->
    <div class="news-section">
        <div class="section-header">
            <div class="header-content">
                <h2>Berita & Informasi Terkini</h2>
                <p>Tetap update dengan berita terbaru dari lingkungan kita</p>
            </div>
            <div class="section-line"></div>
        </div>

        @if($news->count() > 0)
            <div class="news-grid-home">
                @foreach ($news->skip(1)->take(6) as $index => $item)
                    <article class="news-card-modern">
                        <div class="news-card-image">
                            <img src="https://images.unsplash.com/photo-{{ ['1523050854058-8df90110c9f1', '1551288049-bebda4e38f71', '1519331379826-f10be5486c6f', '1503676260728-1c00da094a0b', '1555939594-58d7cb561ad1', '1584515933487-779824d29309'][$index % 6] }}?w=800&h=600&fit=crop" 
                                 alt="{{ $item->title }}" 
                                 loading="lazy">
                            <div class="news-card-overlay">
                                <div class="card-number">#{{ $index + 2 }}</div>
                            </div>
                        </div>
                        <div class="news-card-content">
                            <div class="news-badge-modern">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                            <h3 class="news-title-modern">{{ Str::limit($item->title, 60) }}</h3>
                            <p class="news-excerpt-modern">{{ Str::limit($item->content, 100) }}</p>
                            <a href="{{ route('news.show', $item->id) }}" class="news-link-modern">
                                <span>Baca Selengkapnya</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($news->count() > 7)
                <div class="news-footer">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-modern">
                        <span>Lihat Semua Berita</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            @endif
        @else
            <div class="empty-state">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
                <p>Belum ada berita terbaru</p>
            </div>
        @endif
    </div>

    <!-- Quick Links Section -->
    <div class="quick-links-section">
        <div class="section-header">
            <h2>Akses Cepat</h2>
            <p>Layanan dan informasi penting untuk warga</p>
            <div class="section-line"></div>
        </div>
        
        <div class="quick-links-grid">
            <a href="#" class="quick-link-card">
                <div class="quick-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h4>Data Warga</h4>
                <p>Informasi lengkap data penduduk dan statistik warga</p>
            </a>

            <a href="#" class="quick-link-card">
                <div class="quick-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <h4>Laporan Keuangan</h4>
                <p>Transparansi pengelolaan keuangan untuk warga</p>
            </a>

            <a href="#" class="quick-link-card">
                <div class="quick-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h4>Kontak Darurat</h4>
                <p>Nomor penting dan kontak emergency untuk warga</p>
            </a>
        </div>
    </div>

</div>
@endsection