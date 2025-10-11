<!-- Hero Section Minimalis dengan Gradient -->
<div class="relative isolate overflow-hidden hero-minimal-gradient" data-aos="fade-up">
    <div class="absolute inset-0 z-0">
        @if(isset($hero) && $hero && $hero->image)
            <img src="{{ asset('storage/' . $hero->image) }}" alt="Hero Background" class="w-full h-full object-cover opacity-30" loading="lazy">
        @else
            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Background" class="w-full h-full object-cover opacity-30" loading="lazy">
        @endif
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-gray-800/20"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
            <div class="flex items-center gap-x-4 text-sm font-semibold leading-6 text-orange-400" data-aos="fade-up" data-aos-delay="100">
                <div class="h-px flex-auto bg-orange-500"></div>
                <h2>PREMIUM PROPERTY AGENCY</h2>
                <div class="h-px flex-auto bg-orange-500"></div>
            </div>
            
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl" data-aos="fade-up" data-aos-delay="200">
                {{ $hero->title ?? 'Welcome to Baheera Agency Property' }}
            </h1>
            
            <p class="mt-6 text-lg leading-8 text-gray-300" data-aos="fade-up" data-aos-delay="300">
                {{ $hero->description ?? 'Your premier agency property partner.' }}
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ $hero->cta_link ?? route('properties.index') }}" class="rounded-md hero-minimal-accent px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 text-center transition-all duration-300 hover:scale-105">
                    {{ $hero->cta_text ?? 'Explore Properties' }}
                </a>
                <button onclick="scrollToSection('services')" class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20 text-center transition-all duration-300">
                    Learn More →
                </button>
            </div>
        </div>
        
    </div>
</div>