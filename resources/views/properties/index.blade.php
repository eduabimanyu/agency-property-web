@extends('layouts.app')

@section('content')
<div class="py-24 sm:py-32 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Properties</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Explore our selection of premium properties available for sale or investment.</p>
        </div>

        <!-- Filter by Category -->
        <div class="mx-auto mt-12 max-w-2xl">
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('properties.index') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-full {{ !request()->routeIs('categories.show') ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                    All Properties
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('categories.show', $category) }}" 
                       class="px-4 py-2 text-sm font-medium rounded-full {{ request()->routeIs('categories.show') && request()->route('category')->id == $category->id ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Properties Grid -->
        <div class="mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($properties as $property)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="relative">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            @if($property->image)
                                <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="w-full h-full object-cover">
                            @else
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            @endif
                        </div>
                        <span class="absolute top-4 left-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium capitalize">
                            {{ $property->propertyCategory->name }}
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
                        <p class="text-gray-600 text-left text-sm mb-4">{{ Str::limit($property->description, 100) }}</p>
                        
                        <div class="flex items-center text-gray-600 mt-3 text-sm">
                            @if($property->bedrooms)
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="mr-3">{{ $property->bedrooms }} KT</span>
                            @endif
                            
                            @if($property->bathrooms)
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="mr-3">{{ $property->bathrooms }} KM</span>
                            @endif
                            
                            @if($property->land_area)
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                            </svg>
                            <span>{{ $property->land_area }} m²</span>
                            @endif
                        </div>
                        
                        <div class="mt-6 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">
                                Rp {{ number_format($property->price, 0, ',', '.') }}
                            </span>
                            <a href="{{ route('properties.show', $property) }}" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-amber-400 hover:text-amber-700 transition-colors">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-500">No properties available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection