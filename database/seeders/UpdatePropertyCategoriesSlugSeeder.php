<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\PropertyCategory;

class UpdatePropertyCategoriesSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update property categories with empty or null slugs
        $categories = PropertyCategory::whereNull('slug')
                    ->orWhere('slug', '')
                    ->get();
        
        foreach ($categories as $category) {
            $category->slug = Str::slug($category->name);
            $category->save();
        }
        
        // Ensure all categories have unique slugs
        $allCategories = PropertyCategory::all();
        foreach ($allCategories as $category) {
            $originalSlug = $category->slug;
            $count = 1;
            
            // Check if slug already exists
            while (PropertyCategory::where('slug', $category->slug)->where('id', '!=', $category->id)->exists()) {
                $category->slug = $originalSlug . '-' . $count;
                $count++;
            }
            
            if ($category->isDirty('slug')) {
                $category->save();
            }
        }
    }
}
