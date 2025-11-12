@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="complaints-hero">
    <div class="hero-gradient">
        <div class="gradient-mesh"></div>
    </div>
    <div class="hero-content">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Transparansi Pelayanan</span>
        </div>
        <h1 class="hero-title">Daftar Pengaduan Warga</h1>
        <p class="hero-subtitle">Pantau status pengaduan dan lihat laporan dari warga lainnya</p>
    </div>
</div>

<div class="container">
    <!-- Filter & Search Bar -->
    <div class="filter-section">
        <div class="search-box">
            <div class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
            </div>
            <input type="text" placeholder="Cari pengaduan..." class="search-input" id="searchInput">
        </div>
        
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                Semua
            </button>
            <button class="filter-btn" data-filter="pending">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                Proses
            </button>
            <button class="filter-btn" data-filter="resolved">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Selesai
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card stat-primary">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
            </div>
            <div class="stat-content">
                <div class="stat-label">Total Pengaduan</div>
                <div class="stat-value">{{ $complaints->count() }}</div>
            </div>
        </div>
        
        <div class="stat-card stat-warning">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>
            <div class="stat-content">
                <div class="stat-label">Dalam Proses</div>
                <div class="stat-value">{{ $complaints->where('status', 'pending')->count() }}</div>
            </div>
        </div>
        
        <div class="stat-card stat-success">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <div class="stat-content">
                <div class="stat-label">Terselesaikan</div>
                <div class="stat-value">{{ $complaints->where('status', 'resolved')->count() }}</div>
            </div>
        </div>
    </div>

    <!-- Complaints Grid -->
    @if($complaints->count() > 0)
        <div class="complaints-grid" id="complaintsGrid">
            @foreach ($complaints as $index => $complaint)
                <article class="complaint-card" data-status="{{ $complaint->status ?? 'pending' }}">
                    <div class="card-header">
                        <div class="card-number">#{{ str_pad($complaint->id, 4, '0', STR_PAD_LEFT) }}</div>
                        <div class="status-badge status-{{ $complaint->status ?? 'pending' }}">
                            @if(($complaint->status ?? 'pending') === 'resolved')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>Selesai</span>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>Proses</span>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        @if($complaint->image)
                            <div class="card-image">
                                <img src="{{ asset('storage/' . $complaint->image) }}" alt="{{ $complaint->title }}">
                                <div class="image-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                            </div>
                        @endif

                        <h3 class="card-title">{{ $complaint->title }}</h3>
                        <p class="card-description">{{ Str::limit($complaint->description, 120) }}</p>

                        <div class="card-info">
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="info-text">{{ Str::limit($complaint->location, 40) }}</span>
                            </div>
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span class="info-text">{{ $complaint->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn-view" onclick="viewComplaint({{ $complaint->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>Lihat Detail</span>
                        </button>
                        @if($complaint->image)
                            <button class="btn-map" onclick="openMap('{{ $complaint->location }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                            </button>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($complaints->hasPages())
            <div class="pagination-section">
                {{ $complaints->links() }}
            </div>
        @endif
    @else
        <div class="empty-state-modern">
            <div class="empty-illustration">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    <line x1="9" y1="10" x2="15" y2="10"></line>
                    <line x1="9" y1="14" x2="13" y2="14"></line>
                </svg>
            </div>
            <h3>Belum Ada Pengaduan</h3>
            <p>Pengaduan dari warga akan muncul di sini</p>
            <a href="{{ route('complaints.create') }}" class="btn-create-complaint">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Buat Pengaduan Pertama
            </a>
        </div>
    @endif
</div>

<style>
/* Hero Section */
.complaints-hero {
    position: relative;
    padding: 5rem 2rem 4rem;
    overflow: hidden;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    margin-bottom: 3rem;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
}

.gradient-mesh {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.2) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    animation: meshMove 20s ease-in-out infinite;
}

@keyframes meshMove {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(20px, -20px) scale(1.05); }
}

.hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    padding: 0.625rem 1.25rem;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-badge svg {
    width: 18px;
    height: 18px;
}

.hero-title {
    font-size: 3rem;
    font-weight: 800;
    color: white;
    margin-bottom: 1rem;
    letter-spacing: -1px;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
}

/* Filter Section */
.filter-section {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.search-box {
    flex: 1;
    min-width: 300px;
    position: relative;
}

.search-icon {
    position: absolute;
    left: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
}

.search-icon svg {
    width: 20px;
    height: 20px;
    color: var(--text-muted);
}

.search-input {
    width: 100%;
    padding: 1rem 1.25rem 1rem 3.5rem;
    border: 2px solid var(--border-color);
    border-radius: 14px;
    font-size: 1rem;
    font-family: inherit;
    transition: all 0.3s ease;
    background: white;
}

.search-input:focus {
    outline: none;
    border-color: #4facfe;
    box-shadow: 0 0 0 4px rgba(79, 172, 254, 0.1);
}

.filter-buttons {
    display: flex;
    gap: 0.75rem;
}

.filter-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    border: 2px solid var(--border-color);
    border-radius: 14px;
    background: white;
    color: var(--text-primary);
    font-weight: 600;
    font-size: 0.9375rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn svg {
    width: 18px;
    height: 18px;
}

.filter-btn:hover {
    border-color: #4facfe;
    background: rgba(79, 172, 254, 0.05);
}

.filter-btn.active {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: white;
    border-color: transparent;
    box-shadow: 0 8px 20px rgba(79, 172, 254, 0.3);
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    padding: 2rem;
    border-radius: 20px;
    background: white;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.stat-icon {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-primary .stat-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
}

.stat-warning .stat-icon {
    background: linear-gradient(135deg, #f093fb, #f5576c);
    box-shadow: 0 8px 20px rgba(240, 147, 251, 0.3);
}

.stat-success .stat-icon {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    box-shadow: 0 8px 20px rgba(79, 172, 254, 0.3);
}

.stat-icon svg {
    width: 28px;
    height: 28px;
    color: white;
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.stat-value {
    font-size: 2rem;
    font-weight: 800;
    color: var(--text-primary);
    line-height: 1;
}

/* Complaints Grid */
.complaints-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.complaint-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid var(--border-color);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
}

.complaint-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
    border-bottom: 2px solid var(--border-light);
}

.card-number {
    font-size: 1.125rem;
    font-weight: 700;
    color: #667eea;
}

.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.375rem;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8125rem;
    font-weight: 600;
}

.status-pending {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
}

.status-resolved {
    background: linear-gradient(135deg, #d1fae5, #a7f3d0);
    color: #065f46;
}

.status-badge svg {
    width: 14px;
    height: 14px;
}

.card-image {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: var(--bg-tertiary);
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.complaint-card:hover .card-image img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.complaint-card:hover .image-overlay {
    opacity: 1;
}

.image-overlay svg {
    width: 20px;
    height: 20px;
    color: #667eea;
}

.card-body {
    padding: 1.5rem;
    flex: 1;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.75rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.card-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 1.25rem;
    font-size: 0.9375rem;
}

.card-info {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.info-item svg {
    width: 16px;
    height: 16px;
    color: var(--text-muted);
    flex-shrink: 0;
}

.info-text {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.card-footer {
    display: flex;
    gap: 0.75rem;
    padding: 1.5rem;
    background: var(--bg-secondary);
    border-top: 1px solid var(--border-light);
}

.btn-view {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.875rem 1.25rem;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: white;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.9375rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-view:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(79, 172, 254, 0.4);
}

.btn-view svg {
    width: 18px;
    height: 18px;
}

.btn-map {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border: 2px solid var(--border-color);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-map:hover {
    background: #4facfe;
    border-color: #4facfe;
    transform: translateY(-2px);
}

.btn-map:hover svg {
    color: white;
}

.btn-map svg {
    width: 20px;
    height: 20px;
    color: var(--text-primary);
    transition: color 0.3s ease;
}

/* Empty State */
.empty-state-modern {
    text-align: center;
    padding: 5rem 2rem;
    background: white;
    border-radius: 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.empty-illustration {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #e0f2fe, #dbeafe);
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
}

.empty-illustration svg {
    width: 60px;
    height: 60px;
    color: #4facfe;
}

.empty-state-modern h3 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.75rem;
}

.empty-state-modern p {
    color: var(--text-secondary);
    font-size: 1.0625rem;
    margin-bottom: 2rem;
}

.btn-create-complaint {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: white;
    text-decoration: none;
    border-radius: 14px;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(79, 172, 254, 0.3);
}

.btn-create-complaint:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(79, 172, 254, 0.4);
}

.btn-create-complaint svg {
    width: 20px;
    height: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .filter-section {
        flex-direction: column;
    }
    
    .search-box {
        min-width: 100%;
    }
    
    .filter-buttons {
        width: 100%;
        overflow-x: auto;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .complaints-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Search functionality
document.getElementById('searchInput')?.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const cards = document.querySelectorAll('.complaint-card');
    
    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        const description = card.querySelector('.card-description').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
});

// Filter functionality
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        const filter = this.dataset.filter;
        const cards = document.querySelectorAll('.complaint-card');
        
        cards.forEach(card => {
            if (filter === 'all' || card.dataset.status === filter) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// View complaint
function viewComplaint(id) {
    // Add your view complaint logic here
    console.log('Viewing complaint:', id);
    // Example: window.location.href = `/complaints/${id}`;
}

// Open map
function openMap(location) {
    const coords = location.split(',');
    if (coords.length === 2) {
        window.open(`https://www.google.com/maps?q=${coords[0]},${coords[1]}`, '_blank');
    }
}
</script>
@endsection