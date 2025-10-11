<!-- Hero Section Minimalis dengan Gradient -->
<div class="relative isolate overflow-hidden bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900">
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
            <div class="flex items-center gap-x-4 text-sm font-semibold leading-6 text-orange-400">
                <div class="h-px flex-auto bg-orange-500"></div>
                <h2>PREMIUM PROPERTY AGENCY</h2>
                <div class="h-px flex-auto bg-orange-500"></div>
            </div>
            
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
                <button onclick="scrollToSection('services')" class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20 text-center">
                    Learn More
                </button>
            </div>
        </div>
        
        <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
            <div class="z-10 flex items-center justify-center overflow-hidden rounded-lg border border-gray-700 bg-gray-800 shadow-lg">
                <div class="relative rounded-lg bg-gray-900 p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-3 w-3 rounded-full bg-red-500"></div>
                        <div class="h-3 w-3 rounded-full bg-yellow-500"></div>
                        <div class="h-3 w-3 rounded-full bg-green-500"></div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="h-4 w-32 rounded bg-gray-700"></div>
                        <div class="h-4 w-48 rounded bg-gray-700"></div>
                        <div class="h-4 w-40 rounded bg-gray-700"></div>
                        <div class="h-4 w-36 rounded bg-gray-700"></div>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-3 gap-4">
                        <div class="h-20 rounded-lg bg-gradient-to-br from-orange-500 to-orange-600"></div>
                        <div class="h-20 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600"></div>
                        <div class="h-20 rounded-lg bg-gradient-to-br from-green-500 to-green-600"></div>
                    </div>
                    
                    <div class="mt-6 flex justify-between">
                        <div class="h-8 w-24 rounded bg-gray-700"></div>
                        <div class="h-8 w-8 rounded-full bg-gray-700"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}
</script>