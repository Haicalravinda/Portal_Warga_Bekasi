/**
 * Portal Warga Bekasi - News Page JavaScript
 * Handles news rendering, modal functionality, and interactions
 */

// News Data
const newsData = [{
        title: "Proyek LRT Jabodebek Fase 2 Dimulai, Bekasi Makin Terhubung",
        excerpt: "Pemerintah Kota Bekasi mengumumkan dimulainya pembangunan fase kedua LRT Jabodebek yang akan menghubungkan lebih banyak wilayah di Bekasi dengan Jakarta.",
        category: "Infrastruktur",
        date: "10 Nov 2025",
        image: "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Pemerintah Kota Bekasi resmi mengumumkan dimulainya pembangunan fase kedua LRT Jabodebek yang akan menghubungkan lebih banyak wilayah di Bekasi dengan Jakarta dan sekitarnya. Proyek ambisius ini diharapkan dapat menjadi solusi utama untuk mengurangi kemacetan yang selama ini menjadi masalah kronis di wilayah Bekasi.</p>
            
            <p class="modal-text">Walikota Bekasi menyatakan bahwa pembangunan LRT fase 2 ini merupakan bagian dari komitmen pemerintah untuk meningkatkan kualitas transportasi publik dan mobilitas warga. "Dengan adanya LRT, waktu tempuh warga dari Bekasi ke Jakarta akan lebih cepat dan efisien," ujar Walikota dalam konferensi pers.</p>
            
            <p class="modal-text">Rute baru LRT akan meliputi beberapa kawasan strategis seperti Summarecon Bekasi, Harapan Indah, Boulevard Hijau, dan Grand Galaxy City. Pembangunan ditargetkan selesai pada tahun 2027 dengan total investasi mencapai Rp 15 triliun. Diperkirakan proyek ini akan menyerap sekitar 10.000 tenaga kerja lokal.</p>
            
            <p class="modal-text">Para pengembang properti di Bekasi menyambut positif rencana ini karena diprediksi akan meningkatkan nilai properti di sekitar stasiun LRT. Beberapa kawasan residensial sudah mulai melakukan penyesuaian masterplan untuk mengintegrasikan akses LRT ke dalam konsep Transit-Oriented Development (TOD).</p>
        `
    },
    {
        title: "Pemkot Bekasi Luncurkan Program Smart City untuk Pelayanan Digital",
        excerpt: "Pemerintah Kota Bekasi meluncurkan program Smart City yang mengintegrasikan berbagai layanan publik dalam satu platform digital.",
        category: "Teknologi",
        date: "8 Nov 2025",
        image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Pemerintah Kota Bekasi resmi meluncurkan program Smart City yang bertujuan untuk meningkatkan kualitas pelayanan publik melalui digitalisasi. Program ini mengintegrasikan berbagai layanan dalam satu aplikasi mobile yang dapat diakses oleh seluruh warga Bekasi.</p>
            
            <p class="modal-text">Aplikasi Bekasi Smart City memungkinkan warga untuk mengakses berbagai layanan seperti pengaduan masyarakat, informasi lalu lintas real-time, jadwal pengangkutan sampah, pembayaran pajak online, hingga perizinan usaha. Semua dapat diakses dengan mudah melalui smartphone.</p>
            
            <p class="modal-text">Kepala Dinas Komunikasi dan Informatika Kota Bekasi menjelaskan bahwa program ini merupakan bagian dari transformasi digital pemerintahan. "Kami ingin memberikan kemudahan bagi warga dalam mengakses layanan publik tanpa harus datang ke kantor pemerintahan," jelasnya.</p>
            
            <p class="modal-text">Dalam fase awal, aplikasi ini telah diunduh oleh lebih dari 50.000 pengguna. Target pemerintah adalah mencapai 500.000 pengguna aktif dalam satu tahun ke depan. Berbagai fitur tambahan masih akan terus dikembangkan berdasarkan feedback dari masyarakat.</p>
        `
    },
    {
        title: "Taman Kota Baru di Bekasi Timur Resmi Dibuka untuk Umum",
        excerpt: "Sebuah taman kota seluas 5 hektar dengan fasilitas lengkap dibuka di kawasan Bekasi Timur sebagai ruang publik hijau bagi warga.",
        category: "Lingkungan",
        date: "5 Nov 2025",
        image: "https://images.unsplash.com/photo-1519331379826-f10be5486c6f?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Pemerintah Kota Bekasi meresmikan pembukaan Taman Harapan Hijau, sebuah taman kota seluas 5 hektar yang berlokasi di kawasan Bekasi Timur. Taman ini dibangun sebagai upaya pemerintah untuk menyediakan ruang terbuka hijau yang nyaman dan edukatif bagi masyarakat.</p>
            
            <p class="modal-text">Taman Harapan Hijau dilengkapi dengan berbagai fasilitas modern seperti jogging track sepanjang 2 kilometer, area bermain anak yang aman, lapangan olahraga, amphitheater, dan spot-spot Instagram yang instagramable. Terdapat juga area khusus untuk piknik keluarga dengan gazebo-gazebo yang tertata rapi.</p>
            
            <p class="modal-text">Yang menarik, taman ini juga memiliki konsep edukasi lingkungan dengan taman toga (tanaman obat keluarga), green house, dan information center yang memberikan edukasi tentang pentingnya menjaga lingkungan. Pengunjung dapat belajar tentang berbagai jenis tanaman dan cara menanamnya.</p>
            
            <p class="modal-text">Walikota Bekasi berharap taman ini dapat menjadi paru-paru kota dan tempat rekreasi keluarga yang edukatif. "Kami berkomitmen untuk terus menambah ruang terbuka hijau di Bekasi agar kota kita lebih asri dan nyaman," ujarnya saat peresmian.</p>
        `
    },
    {
        title: "Bekasi Raih Penghargaan Kota Layak Anak Tingkat Nasional",
        excerpt: "Kota Bekasi meraih penghargaan Kota Layak Anak (KLA) kategori Pratama dari Kementerian Pemberdayaan Perempuan dan Perlindungan Anak.",
        category: "Prestasi",
        date: "3 Nov 2025",
        image: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Kota Bekasi berhasil meraih penghargaan Kota Layak Anak (KLA) kategori Pratama dari Kementerian Pemberdayaan Perempuan dan Perlindungan Anak Republik Indonesia. Penghargaan ini diberikan atas komitmen dan upaya pemerintah daerah dalam mewujudkan Kota Layak Anak.</p>
            
            <p class="modal-text">Penilaian KLA mencakup berbagai indikator seperti penguatan kelembagaan, pemenuhan hak sipil dan kebebasan, lingkungan keluarga dan pengasuhan alternatif, kesehatan dasar dan kesejahteraan, pendidikan, pemanfaatan waktu luang dan kegiatan budaya, serta perlindungan khusus.</p>
            
            <p class="modal-text">Walikota Bekasi menyampaikan apresiasi kepada seluruh pihak yang telah berkontribusi dalam pencapaian ini. "Penghargaan ini adalah hasil kerja keras bersama dari seluruh stakeholder. Kami akan terus berkomitmen untuk meningkatkan kualitas perlindungan dan pemenuhan hak anak di Bekasi," ungkapnya.</p>
            
            <p class="modal-text">Beberapa program unggulan yang menjadi penilaian antara lain Forum Anak, Sekolah Ramah Anak, Puskesmas Ramah Anak, Ruang Publik Terpadu Ramah Anak (RPTRA), dan berbagai program perlindungan anak lainnya. Ke depan, Bekasi menargetkan untuk naik ke kategori Madya.</p>
        `
    },
    {
        title: "Festival Kuliner Nusantara Bekasi Hadirkan 200 Stand UMKM",
        excerpt: "Festival kuliner terbesar di Bekasi menghadirkan lebih dari 200 stand UMKM dengan beragam menu makanan khas dari seluruh Indonesia.",
        category: "Acara",
        date: "1 Nov 2025",
        image: "https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Festival Kuliner Nusantara Bekasi 2025 resmi dibuka di area Summarecon Mall Bekasi dengan menghadirkan lebih dari 200 stand UMKM kuliner dari berbagai daerah. Acara ini berlangsung selama 10 hari dan diharapkan dapat mendongkrak ekonomi pelaku usaha kecil menengah di Bekasi.</p>
            
            <p class="modal-text">Berbagai menu makanan khas dari Sabang sampai Merauke dapat ditemukan di festival ini, mulai dari sate padang, rendang, pempek, gudeg, hingga papeda. Selain makanan tradisional, festival ini juga menghadirkan inovasi kuliner modern yang memadukan cita rasa tradisional dengan sentuhan kontemporer.</p>
            
            <p class="modal-text">Kepala Dinas Koperasi dan UMKM Kota Bekasi menyatakan bahwa festival ini merupakan bentuk dukungan pemerintah untuk memajukan sektor UMKM. "Kami berharap festival ini dapat menjadi ajang promosi sekaligus pembelajaran bagi pelaku UMKM untuk terus berinovasi," ujarnya.</p>
            
            <p class="modal-text">Selain bazar kuliner, festival ini juga menggelar berbagai kegiatan menarik seperti cooking demo oleh chef terkenal, lomba masak, musik live, dan workshop bisnis kuliner. Pengunjung yang datang diperkirakan mencapai lebih dari 100.000 orang selama periode festival berlangsung.</p>
        `
    },
    {
        title: "Vaksinasi Massal Covid-19 Booster Kedua untuk Lansia",
        excerpt: "Dinas Kesehatan Kota Bekasi menggelar program vaksinasi booster kedua khusus untuk lansia di 50 lokasi berbeda.",
        category: "Kesehatan",
        date: "29 Okt 2025",
        image: "https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Dinas Kesehatan Kota Bekasi menggelar program vaksinasi massal booster kedua Covid-19 khusus untuk kelompok lansia di 50 lokasi berbeda. Program ini menargetkan 100.000 lansia di Kota Bekasi untuk segera mendapatkan vaksinasi booster guna meningkatkan kekebalan tubuh.</p>
            
            <p class="modal-text">Kepala Dinas Kesehatan Kota Bekasi menjelaskan bahwa lansia merupakan kelompok yang rentan terhadap Covid-19, sehingga perlu mendapatkan perlindungan maksimal. "Vaksinasi booster sangat penting untuk menjaga imunitas tetap tinggi, terutama bagi kelompok lansia," jelasnya.</p>
            
            <p class="modal-text">Lokasi vaksinasi tersebar di berbagai puskesmas, rumah sakit, dan gedung-gedung pemerintahan di seluruh wilayah Bekasi. Pelayanan diberikan secara gratis dengan protokol kesehatan yang ketat. Peserta juga mendapatkan pemeriksaan kesehatan dasar sebelum divaksinasi.</p>
            
            <p class="modal-text">Hingga hari ketiga pelaksanaan, sudah tercatat lebih dari 35.000 lansia yang telah menerima vaksin booster kedua. Antusiasme masyarakat sangat tinggi dan pelaksanaan berjalan lancar. Program ini akan terus berlanjut hingga target 100.000 lansia tercapai.</p>
        `
    },
    {
        title: "Pembangunan Rumah Susun untuk Warga Terdampak Pembebasan Lahan",
        excerpt: "Pemkot Bekasi membangun rumah susun sewa untuk menampung warga yang terdampak pembebasan lahan proyek infrastruktur.",
        category: "Properti",
        date: "27 Okt 2025",
        image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Pemerintah Kota Bekasi memulai pembangunan rumah susun sewa (rusunawa) yang diperuntukkan bagi warga yang terdampak pembebasan lahan untuk proyek infrastruktur. Rusunawa ini dibangun di kawasan Bekasi Barat dengan total 12 tower yang dapat menampung sekitar 5.000 kepala keluarga.</p>
            
            <p class="modal-text">Setiap unit rusunawa memiliki luas 36 meter persegi dengan 2 kamar tidur, ruang tamu, dapur, dan kamar mandi. Fasilitas umum yang disediakan meliputi taman bermain anak, area olahraga, musholla, minimarket, dan area parkir yang memadai. Desain bangunan juga memperhatikan aspek ramah lingkungan dengan sistem pengelolaan air dan sampah yang modern.</p>
            
            <p class="modal-text">Walikota Bekasi menegaskan bahwa program ini merupakan bentuk tanggung jawab pemerintah untuk memberikan hunian layak bagi warga yang kehilangan tempat tinggal akibat pembangunan infrastruktur. "Kami memastikan tidak ada warga yang kehilangan tempat tinggal tanpa kompensasi yang layak," tegasnya.</p>
            
            <p class="modal-text">Pembangunan rusunawa ditargetkan selesai dalam waktu 18 bulan dengan sistem sewa yang terjangkau. Warga penerima manfaat akan mendapatkan subsidi sewa dari pemerintah untuk 5 tahun pertama. Proses relokasi akan dilakukan secara bertahap dan terencana dengan baik.</p>
        `
    },
    {
        title: "Sekolah Gratis hingga SMA untuk Warga Bekasi Mulai 2026",
        excerpt: "Pemkot Bekasi mengalokasikan anggaran khusus untuk program pendidikan gratis mulai dari SD hingga SMA bagi seluruh warga Bekasi.",
        category: "Pendidikan",
        date: "25 Okt 2025",
        image: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&h=600&fit=crop",
        content: `
            <p class="modal-text">Pemerintah Kota Bekasi mengumumkan program pendidikan gratis mulai dari tingkat SD hingga SMA yang akan mulai diberlakukan pada tahun ajaran 2026/2027. Program ambisius ini mengalokasikan anggaran khusus sebesar Rp 500 miliar per tahun dari APBD Kota Bekasi.</p>
            
            <p class="modal-text">Walikota Bekasi menyatakan bahwa pendidikan adalah hak setiap anak dan tidak boleh terhalang oleh keterbatasan ekonomi. "Dengan program ini, kami berharap tidak ada lagi anak putus sekolah karena masalah biaya. Semua anak Bekasi berhak mendapatkan pendidikan berkualitas," ujarnya dengan tegas.</p>
            
            <p class="modal-text">Program pendidikan gratis ini mencakup biaya SPP, seragam, buku pelajaran, dan kegiatan ekstrakurikuler. Pemerintah juga akan memberikan bantuan transportasi bagi siswa yang rumahnya jauh dari sekolah. Untuk memastikan kualitas pendidikan tetap terjaga, pemerintah juga akan meningkatkan kesejahteraan guru dan melengkapi fasilitas sekolah.</p>
            
            <p class="modal-text">Kepala Dinas Pendidikan Kota Bekasi menjelaskan bahwa persiapan program ini sudah dimulai sejak sekarang, termasuk pendataan siswa, peningkatan kapasitas sekolah, dan pelatihan guru. "Kami optimis program ini akan berhasil dan menjadi model bagi daerah lain," tutupnya.</p>
        `
    }
];

/**
 * Render news cards to the grid
 */
function renderNews() {
    const newsGrid = document.getElementById('newsGrid');

    if (!newsGrid) {
        console.error('News grid element not found');
        return;
    }

    newsGrid.innerHTML = '';

    // Skip first item (featured news) and render the rest
    newsData.slice(1).forEach((news, index) => {
        const card = createNewsCard(news, index + 2);
        newsGrid.innerHTML += card;
    });
}

/**
 * Create HTML for a single news card
 */
function createNewsCard(news, number) {
    return `
        <article class="news-card">
            <img src="${news.image}" 
                 alt="${escapeHtml(news.title)}" 
                 class="news-image" 
                 loading="lazy">
            <div class="news-content">
                <div class="news-header">
                    <div class="news-number">#${number}</div>
                    <div class="news-date">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        ${escapeHtml(news.date)}
                    </div>
                </div>
                <h4 class="news-title">${escapeHtml(news.title)}</h4>
                <p class="news-excerpt">${escapeHtml(news.excerpt)}</p>
                <div class="news-footer">
                    <span class="news-category">${escapeHtml(news.category)}</span>
                    <a href="#" class="news-link" onclick="openModal(${number - 1}); return false;">
                        <span>Selengkapnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </article>
    `;
}

/**
 * Open modal with news details
 */
function openModal(index) {
    const modal = document.getElementById('newsModal');

    if (!modal || !newsData[index]) {
        console.error('Modal element or news data not found');
        return;
    }

    const news = newsData[index];

    // Set modal content
    document.getElementById('modalImage').src = news.image;
    document.getElementById('modalTitle').textContent = news.title;
    document.getElementById('modalContent').innerHTML = news.content;
    document.getElementById('modalMeta').innerHTML = `
        <div class="meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span>${escapeHtml(news.date)}</span>
        </div>
        <div class="meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                <line x1="7" y1="7" x2="7.01" y2="7"></line>
            </svg>
            <span>${escapeHtml(news.category)}</span>
        </div>
    `;

    // Show modal
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

/**
 * Close modal
 */
function closeModal() {
    const modal = document.getElementById('newsModal');

    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

/**
 * Toggle mobile menu
 */
function toggleMobileMenu() {
    const navbarNav = document.getElementById('navbarNav');

    if (navbarNav) {
        navbarNav.classList.toggle('active');
    }
}

/**
 * Handle navbar scroll effect
 */
function handleNavbarScroll() {
    const navbar = document.getElementById('navbar');

    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
}

/**
 * Escape HTML to prevent XSS
 */
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

/**
 * Initialize page
 */
function init() {
    // Render news
    renderNews();

    // Add event listeners
    window.addEventListener('scroll', handleNavbarScroll);

    // Close modal when clicking outside
    const modal = document.getElementById('newsModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}