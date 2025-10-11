@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Edit Hero</h1>

                <form action="{{ route('heroes.update', $hero) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                        <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title', $hero->title) }}" required>
                        @error('title')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="subtitle" class="block text-gray-700 text-sm font-bold mb-2">Subtitle</label>
                        <input type="text" name="subtitle" id="subtitle" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('subtitle', $hero->subtitle) }}">
                        @error('subtitle')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea name="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $hero->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="cta_text" class="block text-gray-700 text-sm font-bold mb-2">CTA Text</label>
                        <input type="text" name="cta_text" id="cta_text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('cta_text', $hero->cta_text) }}">
                        @error('cta_text')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="cta_link" class="block text-gray-700 text-sm font-bold mb-2">CTA Link</label>
                        <input type="text" name="cta_link" id="cta_link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('cta_link', $hero->cta_link) }}">
                        @error('cta_link')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Hero Image</label>
                        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('image')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                        
                        @if($hero->image)
                            <div class="mt-2">
                                <p class="text-gray-600 text-sm mb-2">Current Image:</p>
                                <img src="{{ asset('storage/' . $hero->image) }}" alt="Hero Image" class="w-32 h-32 object-cover rounded">
                            </div>
                        @endif
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <a href="{{ route('heroes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Back
                        </a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Hero
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection