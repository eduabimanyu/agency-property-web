<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Property;

class UpdatePropertiesSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update properties with empty or null slugs
        $properties = Property::whereNull('slug')
                    ->orWhere('slug', '')
                    ->get();
        
        foreach ($properties as $property) {
            $property->slug = Str::slug($property->name);
            $property->save();
        }
        
        // Ensure all properties have unique slugs
        $allProperties = Property::all();
        foreach ($allProperties as $property) {
            $originalSlug = $property->slug;
            $count = 1;
            
            // Check if slug already exists
            while (Property::where('slug', $property->slug)->where('id', '!=', $property->id)->exists()) {
                $property->slug = $originalSlug . '-' . $count;
                $count++;
            }
            
            if ($property->isDirty('slug')) {
                $property->save();
            }
        }
    }
}
