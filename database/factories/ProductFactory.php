<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->numerify('########'),
            'name' => fake()->name(),
            'stock' => fake()->numerify('###'),
            'image' => fake()->imageUrl(640,480),
            'sell_price' => fake()->randomFloat(2,0,100),
            'status' => fake()->randomElement(['ACTIVE','DESACTIVATE']),
            'category_id' => Category::all()->random()->id,
            'provider_id' => Provider::all()->random()->id,
        ];
    }
}
