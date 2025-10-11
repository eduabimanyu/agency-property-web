<!-- Hero Section dengan Carousel -->
<div class="relative isolate overflow-hidden bg-gray-900">
    <!-- Carousel Container -->
    <div class="swiper hero-swiper h-screen">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Image 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            
            <!-- Slide 2 -->
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Image 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            
            <!-- Slide 3 -->
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Image 3" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
        </div>
        
        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    
    <!-- Content Overlay -->
    <div class="absolute inset-0 z-10 flex items-center">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                    {{ $hero->title ?? 'Welcome to Baheera Agency Property' }}
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    {{ $hero->description ?? 'Your premier agency property partner.' }}
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ $hero->cta_link ?? route('properties.index') }}" class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400">
                        {{ $hero->cta_text ?? 'Explore Properties' }}
                    </a>
                    <a href="{{ route('projects.index') }}" class="text-sm font-semibold leading-6 text-white">
                        View All Projects <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Swiper JS Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>