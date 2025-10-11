<!-- Hero Section dengan Efek Parallax -->
<div class="relative isolate overflow-hidden bg-gray-900">
    <!-- Parallax Background -->
    <div class="absolute inset-0 z-0">
        <div class="parallax-window h-full w-full" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">
                {{ $hero->title ?? 'Welcome to Baheera Agency Property' }}
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-300">
                {{ $hero->description ?? 'Your premier agency property partner.' }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="{{ $hero->cta_link ?? route('properties.index') }}" class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 text-center">
                    {{ $hero->cta_text ?? 'Explore Properties' }}
                </a>
                <a href="{{ route('projects.index') }}" class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20 text-center">
                    View All Projects <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Parallax JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var scene = document.getElementById('scene');
        if (scene) {
            var parallaxInstance = new Parallax(scene);
        }
    });
</script>