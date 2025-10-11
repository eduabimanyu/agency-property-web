<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'title' => 'Welcome to Baheera Agency Property',
            'subtitle' => 'Your premier agency property partner',
            'description' => 'We provide comprehensive property services to help you achieve your real estate goals. With years of experience and a team of experts, we ensure that your property journey is smooth and successful.',
            'cta_text' => 'Explore Properties',
            'cta_link' => '/properties',
            'image' => null
        ]);
    }
}
