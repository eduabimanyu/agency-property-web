@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="{{ route('properties.index') }}" class="text-sm font-semibold leading-6 text-orange-600 hover:text-orange-500 mb-6 inline-block">
                    &larr; Back to Properties
                </a>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Property Image -->
                    <div>
                        @if($property->image)
                            <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="w-full h-96 object-cover rounded-lg">
                        @else
                            <div class="h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Property Details -->
                    <div>
                        <div class="flex justify-between items-start">
                            <h1 class="text-3xl font-bold">{{ $property->name }}</h1>
                            <span class="bg-orange-500 text-white text-sm font-semibold px-3 py-1 rounded">
                                {{ $property->propertyCategory->name }}
                            </span>
                        </div>
                        
                        <div class="flex items-center text-gray-600 mt-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>{{ $property->location }}</span>
                        </div>
                        
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h2 class="text-xl font-semibold mb-3">Spesifikasi</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-gray-600">Harga</p>
                                    <p class="font-semibold">Rp {{ number_format($property->price, 0, ',', '.') }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Status</p>
                                    <p class="font-semibold">{{ $property->status }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Kamar Tidur</p>
                                    <p class="font-semibold">{{ $property->bedrooms }} KT</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Kamar Mandi</p>
                                    <p class="font-semibold">{{ $property->bathrooms }} KM</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Luas Tanah</p>
                                    <p class="font-semibold">{{ $property->land_area }} m²</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Luas Bangunan</p>
                                    <p class="font-semibold">{{ $property->building_area }} m²</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <h2 class="text-xl font-semibold mb-3">Deskripsi</h2>
                            <p class="text-gray-700">{{ $property->description }}</p>
                        </div>
                        
                        <div class="mt-8 flex flex-wrap gap-4">
                            <!-- Download Brochure Button -->
                            <a href="{{ route('properties.download-brochure', $property) }}" 
                               class="bg-gray-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-600 transition-colors">
                                Download E-Brochure
                            </a>
                            
                            <!-- Contact Agent Button -->
                            <button onclick="openContactModal()" 
                                    class="bg-orange-500 hover:bg-orange-700 text-white text-sm font-medium py-3 px-6 rounded">
                                Hubungi Agent
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Agent Modal -->
<div id="contactModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Hubungi Agent</h3>
                <button onclick="closeContactModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form action="{{ route('contact') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="subject" value="Inquiry for {{ $property->name }}">
                <div class="mb-4">
                    <label for="contact_name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="contact_name" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="contact_email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="contact_email" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="contact_phone" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                    <input type="text" name="phone" id="contact_phone" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="contact_message" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea name="message" id="contact_message" rows="4" required
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeContactModal()"
                            class="mr-2 px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
                        Batal
                    </button>
                    <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-green-500 rounded-md hover:bg-green-600">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openContactModal() {
        document.getElementById('contactModal').classList.remove('hidden');
    }
    
    function closeContactModal() {
        document.getElementById('contactModal').classList.add('hidden');
    }
    
    // Close modals when clicking outside
    window.onclick = function(event) {
        const contactModal = document.getElementById('contactModal');
        
        if (event.target == contactModal) {
            contactModal.classList.add('hidden');
        }
    }
</script>
@endsection