<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency Property</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      media="print"
      onload="this.media='all'"
    />
    <noscript>
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
    </noscript>
</head>
<body class="antialiased">
    @php
        $hero = App\Models\Hero::first();
        $projects = App\Models\Project::latest()->take(6)->get();
        $properties = App\Models\Property::latest()->take(6)->get();
    @endphp
    
    <!-- Hero Section Minimalis dengan Gradient -->
    @include('components.hero-minimal', ['hero' => $hero])
    
    <!-- Services Section -->
    <div id="services" class="py-16 sm:py-24 bg-white" data-aos="fade-up">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-orange-600" data-aos="fade-up">Our Services</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up" data-aos-delay="100">Everything you need for property success</p>
                <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-up" data-aos-delay="200">We provide comprehensive property services to help you achieve your real estate goals.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16" data-aos="fade-up" data-aos-delay="300">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            Property Sales
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Expert guidance through the entire property selling process with market analysis and strategic pricing.</dd>
                    </div>
                    <div class="relative pl-16" data-aos="fade-up" data-aos-delay="400">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            Property Management
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Comprehensive property management services including tenant screening, maintenance, and rent collection.</dd>
                    </div>
                    <div class="relative pl-16" data-aos="fade-up" data-aos-delay="500">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </div>
                            Property Search
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Personalized property search services to find your perfect home or investment opportunity.</dd>
                    </div>
                    <div class="relative pl-16" data-aos="fade-up" data-aos-delay="600">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Investment Consulting
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Strategic investment advice and market insights to maximize your property investment returns.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="portfolio" class="py-8 sm:py-24 bg-gray-50" data-aos="fade-up">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up">Our Projects</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-up" data-aos-delay="100">Explore our portfolio of successful real estate developments and ongoing projects.</p>
            </div>
            
            <!-- Projects Carousel -->
            <div class="relative mt-16">
                <div class="swiper projects-swiper">
                    <div class="swiper-wrapper">
                        @forelse($projects as $project)
                        <div class="swiper-slide mb-8">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="relative">
                                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                                        @if($project->image)
                                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" class="w-full h-full object-cover" loading="lazy">
                                        @else
                                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        @endif
                                    </div>
                                    <span class="absolute top-4 left-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium capitalize">{{ $project->status }}</span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl text-left font-bold text-gray-900 mb-2">{{ $project->name }}</h3>
                                    <div class="flex items-center text-gray-600 mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="text-sm">{{ $project->location }}</span>
                                    </div>
                                    <p class="text-gray-600 text-left text-sm mb-4">{{ Str::limit($project->description, 100) }}</p>
                                    <div class="flex justify-between items-center">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 capitalize">{{ $project->year }}</span>
                                        <a href="{{ route('projects.show', $project) }}" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-800 transition-colors">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="swiper-slide">
                            <div class="col-span-3 text-center py-12">
                                <p class="text-gray-500">No projects available at the moment.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
                
                <!-- Navigation arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
               <div class="mt-5 text-center">
                 <a href="{{ route('projects.index') }}" class="text-sm font-semibold leading-6 text-orange-600 hover:text-orange-500">View All Projects <span aria-hidden="true">→</span></a>
              </div>
        </div>
    </div>
 

    <!-- Properties Section -->
    <div id="properties" class="py-8 sm:py-32 bg-white" data-aos="fade-up">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up">Our Properties</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-up" data-aos-delay="100">Explore our selection of premium properties available for sale or investment.</p>
            </div>
            
            <!-- Properties Carousel -->
            <div class="relative mt-16">
                <div class="swiper properties-swiper">
                    <div class="swiper-wrapper">
                        @forelse($properties as $property)
                        <div class="swiper-slide mb-8">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="relative">
                                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                                        @if($property->image)
                                            <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="w-full h-full object-cover" loading="lazy">
                                        @else
                                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        @endif
                                    </div>
                                    <span class="absolute top-4 left-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium capitalize">
                                        {{ $property->propertyCategory->name ?? 'Property' }}
                                    </span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl text-left font-bold text-gray-900 mb-2">{{ $property->name }}</h3>
                                    <div class="flex items-center text-gray-600 mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="text-sm">{{ $property->location }}</span>
                                    </div>
                                    <div class="flex items-center text-gray-600 mb-2 text-sm">
                                        @if($property->bedrooms)
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        </svg>
                                        <span class="mr-4">{{ $property->bedrooms }} KT</span>
                                        @endif
                                        
                                        @if($property->bathrooms)
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="mr-4">{{ $property->bathrooms }} KM</span>
                                        @endif
                                        
                                        @if($property->land_area)
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                                        </svg>
                                        <span class="mr-4">{{ $property->land_area }} m²</span>
                                        @endif
                                        
                                        @if($property->building_area)
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        <span>{{ $property->building_area }} m²</span>
                                        @endif
                                    </div>
                                    <p class="text-gray-600 text-left text-sm mb-4">{{ Str::limit($property->description, 100) }}</p>
                                    <div class="flex justify-between items-center">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 capitalize">{{ $property->status }}</span>
                                        <a href="{{ route('properties.show', $property) }}" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-800 transition-colors">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="swiper-slide">
                            <div class="col-span-3 text-center py-12">
                                <p class="text-gray-500">No properties available at the moment.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
                
                <!-- Navigation arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimonials" class="py-24 sm:py-32 bg-gray-50" data-aos="fade-up">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-orange-600" data-aos="fade-up">Testimonials</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up" data-aos-delay="100">What our clients say</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <!-- Testimonials Carousel -->
                <div class="relative">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            @php
                                $testimonials = App\Models\Testimonial::latest()->take(6)->get();
                            @endphp
                            
                            @forelse($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <figure class="rounded-2xl bg-white p-8 text-sm leading-6 shadow-lg ring-1 ring-gray-900/5 h-full" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <!-- Rating Stars -->
                                    <div class="flex items-center mb-4">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $testimonial->rating)
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @else
                                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    
                                    <blockquote class="text-gray-900">
                                        <p>"{{ $testimonial->quote }}"</p>
                                    </blockquote>
                                    <figcaption class="mt-6 flex items-center gap-x-4">
                                        <img class="h-10 w-10 rounded-full bg-gray-50" src="{{ $testimonial->avatar }}" alt="{{ $testimonial->name }}" loading="lazy">
                                        <div>
                                            <div class="font-semibold text-gray-900">{{ $testimonial->name }}</div>
                                            <div class="text-gray-600">{{ $testimonial->role }}</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            @empty
                            <div class="swiper-slide">
                                <div class="text-center py-12">
                                    <p class="text-gray-500">No testimonials available at the moment.</p>
                                </div>
                            </div>
                            @endforelse
                        </div>
                        
                        <!-- Navigation arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="py-16 sm:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center mb-16">
                <h2 class="text-base font-semibold leading-7 text-orange-600" data-aos="fade-up">Contact Us</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up" data-aos-delay="100">Get in touch today</p>
                <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-up" data-aos-delay="200">Ready to start your property journey? Contact our team for personalized assistance.</p>
            </div>
            
            <div class="mx-auto max-w-7xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <!-- Contact Information -->
                    <div data-aos="fade-up" data-aos-delay="300">
                        <div class="bg-gray-50 rounded-2xl p-8 h-full">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                            
                            <div class="space-y-6">
                                <!-- Address -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                                        <svg class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Our Office</h4>
                                        <p class="mt-1 text-sm text-gray-600">123 Property Avenue, Suite 100<br>Real Estate City, RE 12345</p>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                                        <svg class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Phone</h4>
                                        <p class="mt-1 text-sm text-gray-600">(021) 123-4567</p>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                                        <svg class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Email</h4>
                                        <p class="mt-1 text-sm text-gray-600">info@baheeraagency.com</p>
                                    </div>
                                </div>
                                
                                <!-- Working Hours -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                                        <svg class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Working Hours</h4>
                                        <p class="mt-1 text-sm text-gray-600">Monday - Friday: 08:00 - 17:00 WIB<br>Saturday: 09:00 - 15:00 WIB<br>Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Map -->
                            <div class="mt-10" data-aos="fade-up" data-aos-delay="400">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4">Our Location</h4>
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-64 flex items-center justify-center">
                                    <span class="text-gray-500">Google Maps Embed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div data-aos="fade-up" data-aos-delay="500">
                        <div class="bg-white rounded-2xl shadow-lg p-8 h-full border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h3>
                            <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                                @csrf
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                                        <div class="mt-2.5">
                                            <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                                        <div class="mt-2.5">
                                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                                    <div class="mt-2.5">
                                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
                                    <div class="mt-2.5">
                                        <input type="tel" name="phone" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="subject" class="block text-sm font-semibold leading-6 text-gray-900">Subject</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="subject" id="subject" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                                    <div class="mt-2.5">
                                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                                
                                <div>
                                    <button type="submit" class="block w-full rounded-md bg-orange-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 transition-all duration-300 transform hover:-translate-y-1">Let's talk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.5 13.559 3.5 12.017s.698-2.878 1.626-3.674c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.928.796 1.626 2.132 1.626 3.674s-.698 2.878-1.626 3.674c-.875.807-2.026 1.297-3.323 1.297z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-gray-400">&copy; 2024 Baheera Agency Property. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
        
    <!-- Initialize Scripts -->
    <script>
        // Scripts are now handled in resources/js/components.js
    </script>
</body>
</html>