<!-- Hero Section dengan Form Pencarian -->
<div class="relative isolate overflow-hidden bg-gray-900">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hero Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">
                {{ $hero->title ?? 'Find Your Dream Property' }}
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-300">
                {{ $hero->description ?? 'Discover the perfect property that matches your lifestyle and investment goals.' }}
            </p>
        </div>
        
        <!-- Search Form -->
        <div class="mx-auto mt-16 max-w-2xl sm:mt-24 lg:mt-0 lg:mr-0 lg:max-w-lg">
            <div class="bg-white rounded-lg shadow-xl p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Search Properties</h2>
                <form class="space-y-4">
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" id="location" name="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm p-2 border">
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="property-type" class="block text-sm font-medium text-gray-700">Property Type</label>
                            <select id="property-type" name="property-type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm p-2 border">
                                <option>All Types</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Commercial</option>
                                <option>Land</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="price-range" class="block text-sm font-medium text-gray-700">Price Range</label>
                            <select id="price-range" name="price-range" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm p-2 border">
                                <option>Any Price</option>
                                <option>Under $500,000</option>
                                <option>$500,000 - $1,000,000</option>
                                <option>Above $1,000,000</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400">
                            Search Properties
                        </button>
                    </div>
                </form>
                
                <div class="mt-6 flex justify-center gap-x-6">
                    <a href="{{ route('properties.index') }}" class="text-sm font-semibold leading-6 text-orange-600 hover:text-orange-500">
                        Browse All Properties <span aria-hidden="true">→</span>
                    </a>
                    <a href="{{ route('projects.index') }}" class="text-sm font-semibold leading-6 text-orange-600 hover:text-orange-500">
                        View Projects <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>