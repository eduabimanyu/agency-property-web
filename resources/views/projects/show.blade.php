@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="{{ route('projects.index') }}" class="text-sm font-semibold leading-6 text-orange-600 hover:text-orange-500 mb-6 inline-block">
                    &larr; Back to Projects
                </a>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Project Image -->
                    <div>
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" class="w-full h-96 object-cover rounded-lg">
                        @else
                            <div class="h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Project Details -->
                    <div>
                        <div class="flex justify-between items-start">
                            <h1 class="text-3xl font-bold">{{ $project->name }}</h1>
                            <span class="bg-orange-400 text-white text-sm font-semibold px-3 py-1 rounded capitalize">
                                {{ $project->status }}
                            </span>
                        </div>
                        
                        <div class="flex items-center text-gray-600 mt-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>{{ $project->location }}</span>
                        </div>
                        
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h2 class="text-xl font-semibold mb-3">Projects Information</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-gray-600">Year</p>
                                    <p class="font-semibold">{{ $project->year }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Unit</p>
                                    <p class="font-semibold">{{ $project->units }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Area</p>
                                    <p class="font-semibold">{{ $project->area }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Key Feature </p>
                                    <p class="font-semibold">{{ $project->key_feature }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">Description</h2>
                            <p class="text-gray-700">{{ $project->description }}</p>
                        </div>
                        
                        @if($project->e_brochure)
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#" class="bg-gray-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-600 transition-colors" onclick="event.preventDefault(); document.getElementById('download-form').submit();">
                                Download E-Brochure
                            </a>
                              <!-- Contact Agent Button -->
                            <button onclick="openContactModal()" 
                                    class="bg-orange-500 hover:bg-orange-700 text-white text-sm font-medium py-3 px-6 rounded">
                                Hubungi Agent
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Gallery Images -->
                @if($project->gallery_images && count($project->gallery_images) > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-6">Galeri</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($project->gallery_images as $image)
                            <div class="h-48 bg-gray-200 rounded-lg flex items-center justify-center">
                                @if($image)
                                    <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image" class="w-full h-full object-cover rounded-lg">
                                @else
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection