<?php

namespace Database\Factories;

use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyCategory>
 */
class PropertyCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement(['Perumahan', 'Ruko', 'Apartemen', 'Vila', 'Kantor', 'Tanah', 'Gudang', 'Hotel']);
        
        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
            'slug' => Str::slug($name),
            'icon' => $this->faker->randomElement(['home', 'building-office', 'building-storefront', 'academic-cap', 'map']),
            'is_active' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}