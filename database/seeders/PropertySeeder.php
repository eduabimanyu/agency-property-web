<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\PropertyCategory;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure we have property categories first
        if (PropertyCategory::count() === 0) {
            $this->call(PropertyCategorySeeder::class);
        }
        
        $categories = PropertyCategory::all();
        
        if ($categories->isEmpty()) {
            echo "No property categories found. Please run PropertyCategorySeeder first.\n";
            return;
        }
        
        $properties = [
            [
                'name' => 'Grand Central Residence',
                'description' => 'Perumahan eksklusif dengan fasilitas lengkap dan lokasi strategis di jantung kota. Dilengkapi dengan area hijau yang luas, security 24 jam, dan akses mudah ke pusat bisnis.',
                'property_category_id' => $categories->where('name', 'Perumahan')->first()->id,
                'price' => 800000000,
                'location' => 'Jakarta Selatan',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'land_area' => 120,
                'building_area' => 80,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Ruko Grand Central',
                'description' => 'Ruko strategis di pusat bisnis dengan akses mudah dan visibilitas tinggi. Cocok untuk berbagai jenis usaha dengan desain modern dan fasilitas lengkap.',
                'property_category_id' => $categories->where('name', 'Ruko')->first()->id,
                'price' => 2500000000,
                'location' => 'Central Business District',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'land_area' => 100,
                'building_area' => 80,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Grand Plaza Residence',
                'description' => 'Apartemen mewah dengan fasilitas lengkap dan pemandangan kota yang indah. Menawarkan kenyamanan hidup modern dengan berbagai fasilitas premium.',
                'property_category_id' => $categories->where('name', 'Apartemen')->first()->id,
                'price' => 1200000000,
                'location' => 'Premium Location',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'land_area' => 120,
                'building_area' => 90,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Villa Puncak Indah',
                'description' => 'Vila nyaman dengan pemandangan alam yang indah dan udara segar. Dilengkapi dengan kolam renang pribadi, taman luas, dan fasilitas rekreasi.',
                'property_category_id' => $categories->where('name', 'Vila')->first()->id,
                'price' => 3500000000,
                'location' => 'Puncak, Bogor',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'land_area' => 200,
                'building_area' => 150,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Kantor Menara Bisnis',
                'description' => 'Kantor premium dengan lokasi strategis di distrik bisnis utama. Menawarkan ruang kerja modern dengan fasilitas lengkap untuk mendukung produktivitas bisnis.',
                'property_category_id' => $categories->where('name', 'Kantor')->first()->id,
                'price' => 5000000000,
                'location' => 'CBD Jakarta',
                'bedrooms' => null,
                'bathrooms' => 4,
                'land_area' => 500,
                'building_area' => 400,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Tanah Komersial Strategis',
                'description' => 'Lahan komersial dengan potensi investasi tinggi di kawasan berkembang. Cocok untuk berbagai keperluan pengembangan dengan akses mudah ke jalan utama.',
                'property_category_id' => $categories->where('name', 'Tanah')->first()->id,
                'price' => 2000000000,
                'location' => 'BSD City, Tangerang',
                'bedrooms' => null,
                'bathrooms' => null,
                'land_area' => 300,
                'building_area' => null,
                'status' => 'available',
                'image' => null
            ],
            [
                'name' => 'Residential Luxury Hills',
                'description' => 'Perumahan mewah dengan desain arsitektur modern dan lingkungan yang nyaman. Menawarkan kenyamanan tinggal dengan fasilitas eksklusif dan keamanan terjaga.',
                'property_category_id' => $categories->where('name', 'Perumahan')->first()->id,
                'price' => 1500000000,
                'location' => 'Depok',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'land_area' => 150,
                'building_area' => 120,
                'status' => 'sold',
                'image' => null
            ],
            [
                'name' => 'Apartemen Sky Garden',
                'description' => 'Apartemen dengan konsep hijau dan fasilitas ramah lingkungan. Dilengkapi dengan rooftop garden, sistem irigasi otomatis, dan area rekreasi yang luas.',
                'property_category_id' => $categories->where('name', 'Apartemen')->first()->id,
                'price' => 950000000,
                'location' => 'Tangerang',
                'bedrooms' => 2,
                'bathrooms' => 1,
                'land_area' => 90,
                'building_area' => 70,
                'status' => 'available',
                'image' => null
            ],
        ];

        foreach ($properties as $property) {
            Property::updateOrCreate(
                ['name' => $property['name']],
                $property
            );
        }
    }
}
