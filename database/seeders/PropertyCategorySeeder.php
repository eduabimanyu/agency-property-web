<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyCategory;
use Illuminate\Support\Str;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Perumahan',
                'description' => 'Properti perumahan seperti rumah tinggal',
                'icon' => 'home',
                'is_active' => true
            ],
            [
                'name' => 'Ruko',
                'description' => 'Rumah toko untuk keperluan komersial',
                'icon' => 'building-storefront',
                'is_active' => true
            ],
            [
                'name' => 'Apartemen',
                'description' => 'Unit hunian vertikal dalam gedung bertingkat',
                'icon' => 'building-office',
                'is_active' => true
            ],
            [
                'name' => 'Vila',
                'description' => 'Properti liburan atau hunian mewah',
                'icon' => 'home',
                'is_active' => true
            ],
            [
                'name' => 'Kantor',
                'description' => 'Properti untuk keperluan kantor atau bisnis',
                'icon' => 'building-office',
                'is_active' => true
            ],
            [
                'name' => 'Tanah',
                'description' => 'Lahan kosong untuk berbagai keperluan',
                'icon' => 'map',
                'is_active' => true
            ]
        ];

        foreach ($categories as $category) {
            // Generate slug if not provided
            if (!isset($category['slug'])) {
                $category['slug'] = Str::slug($category['name']);
            }
            
            PropertyCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
