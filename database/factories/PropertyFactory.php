<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = PropertyCategory::inRandomOrder()->first() ?? PropertyCategory::factory()->create();
        
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'property_category_id' => $category->id,
            'price' => $this->faker->randomElement([500000000, 750000000, 1000000000, 1500000000, 2000000000, 2500000000, 3000000000]),
            'location' => $this->faker->randomElement(['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Bali', 'Bogor', 'Tangerang', 'Depok']),
            'bedrooms' => $this->faker->randomElement([1, 2, 3, 4, 5, null]),
            'bathrooms' => $this->faker->randomElement([1, 2, 3, 4, null]),
            'land_area' => $this->faker->randomElement([50, 75, 100, 120, 150, 200, 250, 300, null]),
            'building_area' => $this->faker->randomElement([30, 50, 75, 90, 120, 150, 180, 200, null]),
            'status' => $this->faker->randomElement(['available', 'sold', 'rented']),
            'image' => null,
        ];
    }
}