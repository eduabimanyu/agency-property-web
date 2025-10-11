<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brochure;
use App\Models\Property;

class BrochureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = Property::all();
        
        foreach ($properties as $property) {
            Brochure::create([
                'title' => 'E-Brochure ' . $property->name,
                'description' => 'Brosur digital untuk properti ' . $property->name,
                'file_path' => 'brochures/sample_brochure.pdf', // Path contoh brosur
                'property_id' => $property->id
            ]);
        }
    }
}
