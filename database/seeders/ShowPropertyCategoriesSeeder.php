<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyCategory;

class ShowPropertyCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = PropertyCategory::all();
        
        echo "Data Property Categories:\n";
        echo "========================\n";
        
        foreach ($categories as $category) {
            echo "ID: " . $category->id . "\n";
            echo "Name: " . $category->name . "\n";
            echo "Slug: " . $category->slug . "\n";
            echo "Description: " . $category->description . "\n";
            echo "Active: " . ($category->is_active ? 'Yes' : 'No') . "\n";
            echo "-------------------\n";
        }
        
        echo "Total categories: " . $categories->count() . "\n";
    }
}
