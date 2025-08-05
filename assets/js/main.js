document.addEventListener('DOMContentLoaded', function() {
    // Banner Rotation
    let currentBanner = 0;
    const banners = document.querySelectorAll('.banner');
    const bannerCount = banners.length;

    function rotateBanners() {
        banners[currentBanner].classList.remove('active');
        currentBanner = (currentBanner + 1) % bannerCount;
        banners[currentBanner].classList.add('active');
    }

    // Start rotation only if there are banners
    if (bannerCount > 0) {
        setInterval(rotateBanners, 5000);
    }

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    }

    // GK Quiz Functionality
    const quizOptions = document.querySelectorAll('.quiz-options button');
    const quizResult = document.querySelector('.quiz-result');
    const tryAnother = document.querySelector('.try-another');

    if (quizOptions.length > 0) {
        quizOptions.forEach(option => {
            option.addEventListener('click', () => {
                if (option.classList.contains('correct')) {
                    option.style.backgroundColor = '#4CAF50';
                } else {
                    option.style.backgroundColor = '#F44336';
                }
                quizResult.classList.remove('hidden');
            });
        });

        tryAnother.addEventListener('click', () => {
            quizResult.classList.add('hidden');
            quizOptions.forEach(option => {
                option.style.backgroundColor = '';
            });
        });
    }

    // Lazy Loading for Images
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
        });
    }

    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Form Validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#F44336';
                    isValid = false;
                } else {
                    field.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });
});
