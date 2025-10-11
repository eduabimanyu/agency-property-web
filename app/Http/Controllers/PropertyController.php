<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\BrochureRequest;
use App\Models\ContactMessage;
use App\Models\Brochure;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::with('propertyCategory')->get();
        $categories = PropertyCategory::all();
        
        return view('properties.index', compact('properties', 'categories'));
    }
    
    public function show(Property $property)
    {
        $property->load('propertyCategory', 'brochures');
        return view('properties.show', compact('property'));
    }
    
    public function category(PropertyCategory $category)
    {
        $properties = Property::where('property_category_id', $category->id)->get();
        $categories = PropertyCategory::all();
        
        return view('properties.index', compact('properties', 'categories'));
    }
    
    public function brochureRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'property_id' => 'required|exists:properties,id'
        ]);
        
        BrochureRequest::create($request->all());
        
        // Di sini Anda bisa menambahkan logika untuk mengirim email brosur
        // atau menyimpan file brosur yang akan diunduh
        
        return redirect()->back()->with('success', 'Permintaan brosur Anda telah dikirim. Kami akan segera menghubungi Anda.');
    }
    
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);
        
        ContactMessage::create($request->all());
        
        // Di sini Anda bisa menambahkan logika untuk mengirim email
        // kepada admin agency
        
        return redirect()->back()->with('success', 'Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
    }
    
    public function downloadBrochure(Property $property)
    {
        // Untuk demo, kita akan membuat file PDF sederhana
        // Di produksi, Anda akan mengambil file dari storage
        
        $brochure = $property->brochures->first();
        
        if (!$brochure) {
            return redirect()->back()->with('error', 'Brosur tidak tersedia untuk properti ini.');
        }
        
        // Contoh pembuatan PDF sederhana
        $pdfContent = "BROSUR PROPERTI\n\n";
        $pdfContent .= "Nama Properti: " . $property->name . "\n";
        $pdfContent .= "Kategori: " . $property->propertyCategory->name . "\n";
        $pdfContent .= "Lokasi: " . $property->location . "\n";
        $pdfContent .= "Harga: Rp " . number_format($property->price, 0, ',', '.') . "\n";
        $pdfContent .= "Deskripsi: " . $property->description . "\n\n";
        $pdfContent .= "Spesifikasi:\n";
        $pdfContent .= "- Kamar Tidur: " . $property->bedrooms . "\n";
        $pdfContent .= "- Kamar Mandi: " . $property->bathrooms . "\n";
        $pdfContent .= "- Luas Tanah: " . $property->land_area . " m²\n";
        $pdfContent .= "- Luas Bangunan: " . $property->building_area . " m²\n";
        
        $filename = 'brochure-' . str_replace(' ', '-', strtolower($property->name)) . '.txt';
        
        return response($pdfContent)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}

