document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // FLIP CARD FUNCTIONALITY
    // ============================================
    const flipCards = document.querySelectorAll('.flip-card');
    
    flipCards.forEach(card => {
        let isFlipped = false;
        
        card.addEventListener('click', function(e) {
            if (e.target.closest('button')) {
                return;
            }
            
            if (window.innerWidth < 1024) {
                isFlipped = !isFlipped;
                if (isFlipped) {
                    card.classList.add('flipped');
                } else {
                    card.classList.remove('flipped');
                }
            }
        });
        
        const closeBtn = card.querySelector('.flip-card-back button');
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                card.classList.remove('flipped');
                isFlipped = false;
            });
        }
    });

    // ============================================
    // SCROLL ANIMATIONS - INTERSECTION OBSERVER
    // ============================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Animate children with stagger effect
                const children = entry.target.querySelectorAll('.group, .flip-card, .relative');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.style.opacity = '1';
                        child.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }
        });
    }, observerOptions);

    // Observe all sections with scroll-animate class
    const animatedSections = document.querySelectorAll('.scroll-animate');
    animatedSections.forEach(section => {
        // Set initial state
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
        
        // Set children initial state
        const children = section.querySelectorAll('.group, .flip-card, .relative');
        children.forEach(child => {
            child.style.opacity = '0';
            child.style.transform = 'translateY(20px)';
            child.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        });
        
        observer.observe(section);
    });

    // ============================================
    // NAVIGATION SCROLL AND DROPDOWN
    // ============================================
    window.scrollToNavAndOpenDropdown = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        
        setTimeout(() => {
            const dropdown = document.querySelector('[data-dropdown-toggle]');
            if (dropdown) {
                dropdown.click();
            }
        }, 500);
    };

    // ============================================
    // PARALLAX EFFECT FOR SPARKLES
    // ============================================
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const sparkles = document.querySelectorAll('.animate-float, .animate-float-delayed');
        
        sparkles.forEach((sparkle, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            sparkle.style.transform = `translateY(${yPos}px)`;
        });
    });

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
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

    // ============================================
    // COUNTER ANIMATION FOR STATS (if needed)
    // ============================================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }

    // Observe stat counters if they exist
    const statNumbers = document.querySelectorAll('[data-count]');
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                const target = parseInt(entry.target.getAttribute('data-count'));
                animateCounter(entry.target, target);
                entry.target.classList.add('counted');
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(stat => statsObserver.observe(stat));

    // ============================================
    // GRADIENT ANIMATION ON SCROLL
    // ============================================
    const gradientElements = document.querySelectorAll('.animate-gradient-slow');
    window.addEventListener('scroll', () => {
        const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        gradientElements.forEach(el => {
            el.style.backgroundPosition = `0% ${scrollPercent}%`;
        });
    });

    // ============================================
    // LOADING ANIMATION COMPLETE
    // ============================================
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });
});

// ============================================
// CSS ANIMATIONS HELPER
// ============================================
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    
    .loaded .animate-fade-in-up {
        animation-play-state: running;
    }
    
    @keyframes gradient-slow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
`;
document.head.appendChild(style);