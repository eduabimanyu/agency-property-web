// resources/js/components.js

// Initialize AOS (Animate On Scroll) - loaded on demand
import 'aos/dist/aos.css';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Lazy load components only when needed
function loadAOS() {
    import('aos').then(AOS => {
        AOS.default.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-cubic',
        });
    });
}

function loadSwiper() {
    Promise.all([
        import('swiper'),
        import('swiper/modules')
    ]).then(([Swiper, modules]) => {
        const { Navigation, Pagination, Autoplay } = modules;

        // Testimonial Slider
        new Swiper.default('.testimonial-swiper', {
            modules: [Navigation, Pagination, Autoplay],
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '#testimonials .swiper-button-next',
                prevEl: '#testimonials .swiper-button-prev',
            },
            pagination: {
                el: '#testimonials .swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });

        // Property Slider
        new Swiper.default('.properties-swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '#properties .swiper-button-next',
                prevEl: '#properties .swiper-button-prev',
            },
            pagination: {
                el: '#properties .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });

        // Project Slider
        new Swiper.default('.projects-swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '#portfolio .swiper-button-next',
                prevEl: '#portfolio .swiper-button-prev',
            },
            pagination: {
                el: '#portfolio .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });
    });
}

// Scroll to section function
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

// Initialize components when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Check if AOS elements exist on page
    if (document.querySelector('[data-aos]')) {
        loadAOS();
    }
    
    // Check if Swiper elements exist on page
    if (document.querySelector('.swiper')) {
        loadSwiper();
    }
    
    // Attach scroll to section function to global scope for button onclick
    window.scrollToSection = scrollToSection;
});