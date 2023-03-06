<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleDetails>
 */
class SaleDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_id' => Sale::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'quantity' => fake()->numerify('##'),
            'price' => fake()->randomFloat(2,10,100)
        ];
    }
}
