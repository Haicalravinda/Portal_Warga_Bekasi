// ================================
// Portal Warga - Modern & Optimized
// ================================

import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// ================================
// Google Maps Initialization
// ================================
function initMap() {
    const mapElement = document.getElementById("map");
    if (!mapElement) return;

    // Clean, professional map styles
    const mapStyles = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{ "color": "#c8e8ff" }]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{ "color": "#f5f5f5" }]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{ "color": "#2563eb" }]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{ "color": "#3b82f6" }]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{ "color": "#ffffff" }]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{ "color": "#e5e7eb" }]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{ "color": "#d1fae5" }]
        }
    ];

    // Create map
    const map = new google.maps.Map(mapElement, {
        center: { lat: -6.1745, lng: 106.8295 },
        zoom: 15,
        styles: mapStyles,
        mapTypeControl: true,
        streetViewControl: true,
        fullscreenControl: true,
        zoomControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            position: google.maps.ControlPosition.TOP_RIGHT
        }
    });

    // Custom marker
    const marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        animation: google.maps.Animation.DROP,
        draggable: true,
        title: 'Lokasi Pengaduan',
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            fillColor: '#2563eb',
            fillOpacity: 1,
            strokeColor: '#ffffff',
            strokeWeight: 2,
            scale: 10
        }
    });

    // Info window
    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div style="padding: 12px; font-family: Inter, sans-serif;">
                <strong style="color: #2563eb; font-size: 14px;">📍 Lokasi Pengaduan</strong>
                <p style="color: #64748b; font-size: 12px; margin: 4px 0 0 0;">
                    Klik pada peta untuk mengubah lokasi
                </p>
            </div>
        `
    });

    // Show info window on marker click
    marker.addListener('click', () => {
        infoWindow.open(map, marker);
    });

    // Map click handler
    map.addListener('click', (event) => {
        marker.setPosition(event.latLng);

        const locationInput = document.getElementById("location");
        if (locationInput) {
            const lat = event.latLng.lat().toFixed(6);
            const lng = event.latLng.lng().toFixed(6);
            locationInput.value = `${lat},${lng}`;

            // Visual feedback
            locationInput.style.borderColor = '#10b981';
            setTimeout(() => {
                locationInput.style.borderColor = '';
            }, 1000);
        }

        // Update info window
        infoWindow.setContent(`
            <div style="padding: 12px; font-family: Inter, sans-serif;">
                <strong style="color: #2563eb; font-size: 14px;">📍 Lokasi Terpilih</strong>
                <p style="color: #64748b; font-size: 12px; margin: 4px 0 0 0;">
                    Lat: ${event.latLng.lat().toFixed(6)}<br>
                    Lng: ${event.latLng.lng().toFixed(6)}
                </p>
            </div>
        `);
        infoWindow.open(map, marker);
    });

    // Marker drag handler
    marker.addListener('dragend', (event) => {
        const locationInput = document.getElementById("location");
        if (locationInput) {
            const lat = event.latLng.lat().toFixed(6);
            const lng = event.latLng.lng().toFixed(6);
            locationInput.value = `${lat},${lng}`;
        }
    });
}

window.initMap = initMap;

// ================================
// Page Enhancement Scripts
// ================================

document.addEventListener('DOMContentLoaded', () => {

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form submission handler
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn && !submitBtn.disabled) {
                submitBtn.innerHTML = '<span class="loading"></span> Memproses...';
                submitBtn.disabled = true;
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe cards and sections
    const animatedElements = document.querySelectorAll(
        '.info-card, .action-card, .news-card, .quick-link-card'
    );

    animatedElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.animationDelay = `${index * 0.1}s`;
        observer.observe(el);
    });

    // Auto-dismiss alerts
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            alert.style.transform = 'translateX(100%)';
            setTimeout(() => alert.remove(), 300);
        }, 5000);
    });

    // Toast notification system
    window.showToast = (message, type = 'info') => {
        const toast = document.createElement('div');
        toast.className = `alert alert-${type}`;
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            max-width: 500px;
            animation: slideIn 0.3s ease;
        `;
        toast.textContent = message;

        document.body.appendChild(toast);

        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    };

    // Number counter animation (optimized with requestAnimationFrame)
    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
        const target = parseInt(counter.textContent.replace(/,/g, ''));
        const duration = 2000;
        const start = performance.now();

        const animate = (currentTime) => {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(target * easeOutQuart);

            counter.textContent = current.toLocaleString('id-ID');

            if (progress < 1) {
                requestAnimationFrame(animate);
            }
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    requestAnimationFrame(animate);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counterObserver.observe(counter);
    });

    // Performance monitoring (development only)
    if (window.location.hostname === 'localhost') {
        console.log('%c🏘️ Portal Warga', 'color: #2563eb; font-size: 20px; font-weight: bold;');
        console.log('%cPerformance optimized & ready!', 'color: #10b981; font-size: 14px;');

        // Log performance metrics
        window.addEventListener('load', () => {
            const perfData = performance.getEntriesByType('navigation')[0];
            console.log('Page Load Time:', Math.round(perfData.loadEventEnd - perfData.fetchStart), 'ms');
        });
    }

    // Lazy load images
    const lazyImages = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));

    // Prevent memory leaks - cleanup observers on page unload
    window.addEventListener('beforeunload', () => {
        observer.disconnect();
        if (imageObserver) imageObserver.disconnect();
    });

    // Add touch support for mobile devices
    const cards = document.querySelectorAll('.info-card, .action-card, .news-card');
    cards.forEach(card => {
        card.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
        }, { passive: true });

        card.addEventListener('touchend', function() {
            this.style.transform = '';
        }, { passive: true });
    });

    // Debounced resize handler for better performance
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            // Handle responsive adjustments here if needed
            console.log('Resize completed');
        }, 250);
    }, { passive: true });
});

// ================================
// Utility Functions
// ================================

// Format number with locale
window.formatNumber = (num) => {
    return new Intl.NumberFormat('id-ID').format(num);
};

// Format date
window.formatDate = (date) => {
    return new Intl.DateTimeFormat('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    }).format(new Date(date));
};

// Debounce function
window.debounce = (func, wait) => {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

// Throttle function for scroll events
window.throttle = (func, limit) => {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
};