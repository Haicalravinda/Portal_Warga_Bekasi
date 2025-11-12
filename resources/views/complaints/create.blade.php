@extends('layouts.app')

@section('content')
<!-- Hero Section with Gradient -->
<div class="complaint-hero">
    <div class="hero-background">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="gradient-orb orb-3"></div>
    </div>
    <div class="hero-content">
        <div class="hero-icon-wrapper">
            <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    <line x1="9" y1="10" x2="15" y2="10"></line>
                    <line x1="9" y1="14" x2="13" y2="14"></line>
                </svg>
            </div>
        </div>
        <h1 class="hero-title">Sampaikan Pengaduan Anda</h1>
        <p class="hero-subtitle">Kami siap mendengarkan dan membantu menyelesaikan permasalahan Anda dengan cepat</p>
        <div class="hero-stats">
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Layanan</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-number">1-3</div>
                <div class="stat-label">Hari Proses</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Ditindaklanjuti</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="complaint-form-wrapper">
        <!-- Progress Steps -->
        <div class="steps-container">
            <div class="step-item active" data-step="1">
                <div class="step-circle">
                    <span class="step-number">1</span>
                    <svg class="step-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="step-content">
                    <div class="step-title">Detail Pengaduan</div>
                    <div class="step-desc">Isi informasi lengkap</div>
                </div>
            </div>
            <div class="step-connector"></div>
            <div class="step-item" data-step="2">
                <div class="step-circle">
                    <span class="step-number">2</span>
                    <svg class="step-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="step-content">
                    <div class="step-title">Pilih Lokasi</div>
                    <div class="step-desc">Tandai di peta</div>
                </div>
            </div>
            <div class="step-connector"></div>
            <div class="step-item" data-step="3">
                <div class="step-circle">
                    <span class="step-number">3</span>
                    <svg class="step-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="step-content">
                    <div class="step-title">Upload Bukti</div>
                    <div class="step-desc">Lampirkan foto</div>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data" class="complaint-form">
            @csrf
            
            <!-- Step 1: Details -->
            <div class="form-step active" data-step="1">
                <div class="form-card">
                    <div class="card-header-custom">
                        <div class="header-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Informasi Pengaduan</h3>
                            <p>Berikan detail lengkap tentang pengaduan Anda</p>
                        </div>
                    </div>

                    <div class="form-body">
                        <div class="input-group-modern">
                            <label class="input-label">
                                <span class="label-text">Judul Pengaduan</span>
                                <span class="label-required">*</span>
                            </label>
                            <div class="input-wrapper">
                                <div class="input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="4" y1="9" x2="20" y2="9"></line>
                                        <line x1="4" y1="15" x2="20" y2="15"></line>
                                        <line x1="10" y1="3" x2="8" y2="21"></line>
                                        <line x1="16" y1="3" x2="14" y2="21"></line>
                                    </svg>
                                </div>
                                <input type="text" name="title" id="title" class="input-field" placeholder="Contoh: Jalan Rusak di Komplek Perumahan" required>
                            </div>
                            <div class="input-hint">Berikan judul yang jelas dan spesifik</div>
                        </div>

                        <div class="input-group-modern">
                            <label class="input-label">
                                <span class="label-text">Deskripsi Lengkap</span>
                                <span class="label-required">*</span>
                            </label>
                            <div class="textarea-wrapper">
                                <textarea name="description" id="description" class="textarea-field" rows="6" placeholder="Jelaskan detail permasalahan, kapan terjadi, dampaknya, dan hal lain yang perlu kami ketahui..." required></textarea>
                                <div class="textarea-counter">
                                    <span id="charCount">0</span> / 500 karakter
                                </div>
                            </div>
                            <div class="input-hint">Minimal 20 karakter. Semakin detail semakin baik.</div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-next" onclick="goToStep(2)">
                            <span>Lanjut ke Lokasi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Step 2: Location -->
            <div class="form-step" data-step="2">
                <div class="form-card">
                    <div class="card-header-custom">
                        <div class="header-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h3>Tentukan Lokasi</h3>
                            <p>Klik atau seret marker di peta untuk menandai lokasi</p>
                        </div>
                    </div>

                    <div class="form-body">
                        <div class="map-container-modern">
                            <div class="map-toolbar">
                                <button type="button" class="map-btn" onclick="getCurrentLocation()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    Lokasi Saya
                                </button>
                            </div>
                            <div id="map"></div>
                            <input type="hidden" name="location" id="location">
                        </div>

                        <div class="input-group-modern">
                            <label class="input-label">
                                <span class="label-text">Koordinat Lokasi</span>
                            </label>
                            <div class="input-wrapper">
                                <div class="input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="locationDisplay" class="input-field" placeholder="Pilih lokasi di peta" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-back" onclick="goToStep(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            <span>Kembali</span>
                        </button>
                        <button type="button" class="btn-next" onclick="goToStep(3)">
                            <span>Lanjut ke Upload</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Step 3: Evidence -->
            <div class="form-step" data-step="3">
                <div class="form-card">
                    <div class="card-header-custom">
                        <div class="header-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h3>Upload Bukti Foto</h3>
                            <p>Lampirkan foto untuk memperkuat pengaduan (opsional)</p>
                        </div>
                    </div>

                    <div class="form-body">
                        <div class="upload-area" id="uploadArea">
                            <input type="file" name="image" id="imageInput" accept="image/*" onchange="handleFileSelect(event)">
                            <div class="upload-content" id="uploadContent">
                                <div class="upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                </div>
                                <h4>Klik atau seret foto ke sini</h4>
                                <p>Mendukung format: JPG, PNG, JPEG</p>
                                <p class="upload-size">Maksimal ukuran file: 5MB</p>
                            </div>
                            <div class="preview-container" id="previewContainer"></div>
                        </div>

                        <div class="info-banner">
                            <div class="banner-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                            </div>
                            <div class="banner-content">
                                <strong>Catatan Penting</strong>
                                <p>• Pengaduan akan diproses dalam 1-3 hari kerja</p>
                                <p>• Anda akan mendapat notifikasi status pengaduan</p>
                                <p>• Foto membantu mempercepat proses penanganan</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-back" onclick="goToStep(2)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            <span>Kembali</span>
                        </button>
                        <button type="submit" class="btn-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 2L11 13"></path>
                                <path d="M22 2L15 22L11 13L2 9L22 2Z"></path>
                            </svg>
                            <span>Kirim Pengaduan</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
/* Hero Section */
.complaint-hero {
    position: relative;
    padding: 6rem 2rem 4rem;
    overflow: hidden;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    margin-bottom: 4rem;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
}

.gradient-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.4;
    animation: float 20s ease-in-out infinite;
}

.orb-1 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, #f093fb 0%, transparent 70%);
    top: -200px;
    left: -200px;
    animation-delay: 0s;
}

.orb-2 {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, #4facfe 0%, transparent 70%);
    top: 50%;
    right: -150px;
    animation-delay: 7s;
}

.orb-3 {
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, #43e97b 0%, transparent 70%);
    bottom: -175px;
    left: 30%;
    animation-delay: 14s;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -30px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.hero-icon-wrapper {
    margin-bottom: 2rem;
}

.icon-circle {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    animation: pulse 2s ease-in-out infinite;
}

.icon-circle svg {
    width: 50px;
    height: 50px;
    color: white;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
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
    margin-bottom: 3rem;
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 2rem 3rem;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    line-height: 1;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.9);
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: rgba(255, 255, 255, 0.3);
}

/* Steps Container */
.steps-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3rem;
    padding: 2.5rem;
    background: white;
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.step-item {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.step-circle {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: var(--bg-tertiary);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.step-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-muted);
    transition: all 0.3s ease;
}

.step-check {
    position: absolute;
    width: 28px;
    height: 28px;
    color: white;
    opacity: 0;
    transform: scale(0);
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.step-item.active .step-circle {
    background: linear-gradient(135deg, #667eea, #764ba2);
    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.4);
    transform: scale(1.1);
}

.step-item.active .step-number {
    color: white;
}

.step-item.completed .step-circle {
    background: linear-gradient(135deg, #10b981, #059669);
}

.step-item.completed .step-number {
    opacity: 0;
    transform: scale(0);
}

.step-item.completed .step-check {
    opacity: 1;
    transform: scale(1);
}

.step-content {
    display: flex;
    flex-direction: column;
}

.step-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-primary);
}

.step-desc {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.step-connector {
    width: 80px;
    height: 3px;
    background: var(--border-color);
    margin: 0 1.5rem;
    position: relative;
    overflow: hidden;
}

.step-connector::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0%;
    background: linear-gradient(90deg, #667eea, #764ba2);
    transition: width 0.5s ease;
}

.step-item.completed ~ .step-connector::after {
    width: 100%;
}

/* Form Wrapper */
.complaint-form-wrapper {
    max-width: 900px;
    margin: 0 auto;
}

.form-step {
    display: none;
}

.form-step.active {
    display: block;
    animation: fadeInUp 0.4s ease;
}

.form-card {
    background: white;
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    overflow: hidden;
}

.card-header-custom {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    padding: 2.5rem;
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
    border-bottom: 2px solid var(--border-light);
}

.header-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
}

.header-icon svg {
    width: 30px;
    height: 30px;
    color: white;
}

.card-header-custom h3 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 0.25rem 0;
}

.card-header-custom p {
    font-size: 1rem;
    color: var(--text-secondary);
    margin: 0;
}

.form-body {
    padding: 2.5rem;
}

/* Input Groups */
.input-group-modern {
    margin-bottom: 2rem;
}

.input-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
}

.label-text {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-primary);
}

.label-required {
    color: #ef4444;
    font-weight: 700;
}

.input-wrapper {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    z-index: 1;
}

.input-icon svg {
    width: 20px;
    height: 20px;
    color: var(--text-muted);
}

.input-field {
    width: 100%;
    padding: 1rem 1.25rem 1rem 3.5rem;
    border: 2px solid var(--border-color);
    border-radius: 14px;
    font-size: 1rem;
    font-family: inherit;
    transition: all 0.3s ease;
    background: white;
}

.input-field:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
}

.input-field:focus + .input-icon svg {
    color: #667eea;
}

.textarea-wrapper {
    position: relative;
}

.textarea-field {
    width: 100%;
    padding: 1.25rem;
    border: 2px solid var(--border-color);
    border-radius: 14px;
    font-size: 1rem;
    font-family: inherit;
    resize: vertical;
    transition: all 0.3s ease;
}

.textarea-field:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
}

.textarea-counter {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.75rem;
    color: var(--text-muted);
    background: white;
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
}

.input-hint {
    margin-top: 0.5rem;
    font-size: 0.875rem;
    color: var(--text-muted);
}

/* Map Container */
.map-container-modern {
    margin-bottom: 2rem;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    position: relative;
}

.map-toolbar {
    position: absolute;
    top: 1rem;
    right: 1rem;
    z-index: 10;
}

.map-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.25rem;
    background: white;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    color: var(--text-primary);
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.map-btn:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

.map-btn svg {
    width: 18px;
    height: 18px;
}

#map {
    height: 450px;
    width: 100%;
}

/* Upload Area */
.upload-area {
    position: relative;
    margin-bottom: 2rem;
}

#imageInput {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.upload-content {
    border: 3px dashed var(--border-color);
    border-radius: 20px;
    padding: 4rem 2rem;
    text-align: center;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
}

.upload-content:hover {
    border-color: #667eea;
    background: linear-gradient(135deg, #f0f4ff 0%, #e8eeff 100%);
}

.upload-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.upload-icon svg {
    width: 40px;
    height: 40px;
    color: white;
}

.upload-content h4 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.upload-content p {
    color: var(--text-secondary);
    margin-bottom: 0.25rem;
}

.upload-size {
    font-size: 0.875rem;
    color: var(--text-muted);
}

.preview-container {
    display: none;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
}

.preview-container img {
    width: 100%;
    height: auto;
    display: block;
}

/* Info Banner */
.info-banner {
    display: flex;
    gap: 1rem;
    padding: 1.5rem;
    background: linear-gradient(135deg, #e0f2fe 0%, #dbeafe 100%);
    border-radius: 16px;
    border-left: 4px solid #0ea5e9;
}

.banner-icon {
    flex-shrink: 0;
}

.banner-icon svg {
    width: 28px;
    height: 28px;
    color: #0ea5e9;
}

.banner-content strong {
    display: block;
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.banner-content p {
    color: var(--text-secondary);
    font-size: 0.9375rem;
    line-height: 1.6;
    margin: 0.25rem 0;
}

/* Form Actions */
.form-actions {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    padding: 2.5rem;
    background: var(--bg-secondary);
    border-top: 2px solid var(--border-light);
}

.btn-back, .btn-next, .btn-submit {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1.125rem 2rem;
    border-radius: 14px;
    font-weight: 600;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.btn-back {
    background: white;
    color: var(--text-primary);
    border: 2px solid var(--border-color);
}

.btn-back:hover {
    background: var(--bg-tertiary);
    transform: translateX(-4px);
    border-color: var(--text-muted);
}

.btn-next, .btn-submit {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
    margin-left: auto;
}

.btn-next:hover, .btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
}

.btn-submit {
    background: linear-gradient(135deg, #10b981, #059669);
    box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
}

.btn-submit:hover {
    box-shadow: 0 12px 32px rgba(16, 185, 129, 0.4);
}

.btn-back svg, .btn-next svg, .btn-submit svg {
    width: 20px;
    height: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 1rem;
        padding: 1.5rem;
    }
    
    .stat-divider {
        width: 100px;
        height: 1px;
    }
    
    .steps-container {
        padding: 1.5rem 1rem;
        gap: 0.5rem;
    }
    
    .step-content {
        display: none;
    }
    
    .step-connector {
        width: 40px;
        margin: 0 0.5rem;
    }
    
    .form-card {
        border-radius: 16px;
    }
    
    .card-header-custom {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1.5rem;
    }
    
    .form-body {
        padding: 1.5rem;
    }
    
    .form-actions {
        flex-direction: column;
        padding: 1.5rem;
    }
    
    .btn-next, .btn-submit {
        margin-left: 0;
    }
    
    #map {
        height: 350px;
    }
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
<script>
let map, marker;
let currentStep = 1;

function initMap() {
    const mapStyles = [
        { featureType: "water", elementType: "geometry", stylers: [{ color: "#c8e8ff" }] },
        { featureType: "landscape", elementType: "geometry", stylers: [{ color: "#f5f5f5" }] },
        { featureType: "road.highway", elementType: "geometry", stylers: [{ color: "#667eea" }] },
        { featureType: "road.arterial", elementType: "geometry", stylers: [{ color: "#764ba2" }] }
    ];

    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -6.1745, lng: 106.8295 },
        zoom: 15,
        styles: mapStyles,
        mapTypeControl: true,
        streetViewControl: true,
        fullscreenControl: true
    });

    marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            fillColor: '#667eea',
            fillOpacity: 1,
            strokeColor: '#ffffff',
            strokeWeight: 3,
            scale: 12
        }
    });

    map.addListener('click', (e) => updateLocation(e.latLng));
    marker.addListener('dragend', (e) => updateLocation(e.latLng));
}

function updateLocation(latLng) {
    marker.setPosition(latLng);
    const lat = latLng.lat().toFixed(6);
    const lng = latLng.lng().toFixed(6);
    document.getElementById('location').value = `${lat},${lng}`;
    document.getElementById('locationDisplay').value = `${lat}, ${lng}`;
}

function getCurrentLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(pos);
            updateLocation(pos);
        });
    }
}

function goToStep(step) {
    if (step > currentStep) {
        if (currentStep === 1 && !validateStep1()) return;
        if (currentStep === 2 && !validateStep2()) return;
    }
    
    document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.remove('active');
    document.querySelector(`.step-item[data-step="${currentStep}"]`).classList.remove('active');
    document.querySelector(`.step-item[data-step="${currentStep}"]`).classList.add('completed');
    
    currentStep = step;
    
    document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');
    document.querySelector(`.step-item[data-step="${currentStep}"]`).classList.add('active');
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function validateStep1() {
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    if (!title || description.length < 20) {
        alert('Mohon isi judul dan deskripsi minimal 20 karakter');
        return false;
    }
    return true;
}

function validateStep2() {
    if (!document.getElementById('location').value) {
        alert('Mohon pilih lokasi di peta');
        return false;
    }
    return true;
}

function handleFileSelect(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('uploadContent').style.display = 'none';
            const preview = document.getElementById('previewContainer');
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}

// Character counter
document.getElementById('description')?.addEventListener('input', function() {
    document.getElementById('charCount').textContent = this.value.length;
});

window.initMap = initMap;
</script>
@endsection