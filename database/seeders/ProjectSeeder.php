<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Grand Heights Residence',
                'description' => 'Luxury apartment complex with modern amenities and stunning city views.',
                'location' => 'Jakarta Selatan',
                'status' => 'active',
                'year' => '2025',
                'units' => '150 units',
                'area' => '2.5 hectares',
                'key_feature' => 'Swimming pool, Gym, Rooftop garden, 24/7 security',
                'e_brochure' => 'grand-heights-brochure.pdf',
                'image' => 'projects/grand-heights.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery/grand-heights-1.jpg',
                    'projects/gallery/grand-heights-2.jpg',
                    'projects/gallery/grand-heights-3.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Green Valley Villas',
                'description' => 'Exclusive villa complex surrounded by lush greenery and natural landscapes.',
                'location' => 'Bandung',
                'status' => 'upcoming',
                'year' => '2026',
                'units' => '75 units',
                'area' => '5 hectares',
                'key_feature' => 'Private garden, Clubhouse, Tennis court, Organic farm',
                'e_brochure' => 'green-valley-brochure.pdf',
                'image' => 'projects/green-valley.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery/green-valley-1.jpg',
                    'projects/gallery/green-valley-2.jpg',
                    'projects/gallery/green-valley-3.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Harbor View Condominium',
                'description' => 'Waterfront condominium with panoramic ocean views and premium facilities.',
                'location' => 'Batam',
                'status' => 'completed',
                'year' => '2023',
                'units' => '200 units',
                'area' => '3 hectares',
                'key_feature' => 'Private beach, Marina, Spa, Restaurant',
                'e_brochure' => 'harbor-view-brochure.pdf',
                'image' => 'projects/harbor-view.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery/harbor-view-1.jpg',
                    'projects/gallery/harbor-view-2.jpg',
                    'projects/gallery/harbor-view-3.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mountain Peak Residences',
                'description' => 'Hillside luxury residences offering breathtaking mountain views and fresh air.',
                'location' => 'Bogor',
                'status' => 'active',
                'year' => '2025',
                'units' => '100 units',
                'area' => '4 hectares',
                'key_feature' => 'Hiking trails, Observatory deck, Organic garden, Wellness center',
                'e_brochure' => 'mountain-peak-brochure.pdf',
                'image' => 'projects/mountain-peak.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery/mountain-peak-1.jpg',
                    'projects/gallery/mountain-peak-2.jpg',
                    'projects/gallery/mountain-peak-3.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Urban Loft Apartments',
                'description' => 'Modern urban living in the heart of the city with contemporary design.',
                'location' => 'Surabaya',
                'status' => 'upcoming',
                'year' => '2027',
                'units' => '120 units',
                'area' => '1.8 hectares',
                'key_feature' => 'Co-working space, Sky lounge, Urban garden, Smart home system',
                'e_brochure' => 'urban-loft-brochure.pdf',
                'image' => 'projects/urban-loft.jpg',
                'gallery_images' => json_encode([
                    'projects/gallery/urban-loft-1.jpg',
                    'projects/gallery/urban-loft-2.jpg',
                    'projects/gallery/urban-loft-3.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('projects')->insert($projects);
    }
}
