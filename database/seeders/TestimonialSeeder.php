<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Perbarui testimonial yang sudah ada dengan rating
        Testimonial::whereNull('rating')->update(['rating' => 5]);
        
        // Buat testimonial baru dengan rating
        Testimonial::factory()->count(6)->create();
    }
}
