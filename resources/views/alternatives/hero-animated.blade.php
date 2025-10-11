<!-- Hero Section dengan Animasi Teks -->
<div class="relative isolate overflow-hidden bg-gray-900">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
            <div class="typewriter">
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl animate-fade-in">
                    <span class="typing-text">{{ $hero->title ?? 'Welcome to Baheera Agency Property' }}</span>
                </h1>
            </div>
            <p class="mt-6 text-lg leading-8 text-gray-300 animate-slide-up">
                {{ $hero->description ?? 'Your premier agency property partner.' }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 animate-fade-in-delay">
                <a href="{{ $hero->cta_link ?? route('properties.index') }}" class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 text-center transform hover:scale-105 transition-transform">
                    {{ $hero->cta_text ?? 'Explore Properties' }}
                </a>
                <a href="{{ route('projects.index') }}" class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20 text-center transform hover:scale-105 transition-transform">
                    View All Projects <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Animasi CSS -->
<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { 
        opacity: 0; 
        transform: translateY(20px);
    }
    to { 
        opacity: 1; 
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fadeIn 1s ease-in;
}

.animate-slide-up {
    animation: slideUp 1s ease-in 0.3s forwards;
    opacity: 0;
}

.animate-fade-in-delay {
    animation: fadeIn 1s ease-in 0.6s forwards;
    opacity: 0;
}

.typing-text {
    display: inline-block;
    overflow: hidden;
    border-right: .15em solid orange;
    white-space: nowrap;
    animation: 
        typing 3.5s steps(40, end),
        blink-caret .75s step-end infinite;
}

@keyframes typing {
    from { width: 0 }
    to { width: 100% }
}

@keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: orange; }
}
</style>