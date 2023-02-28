<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseDetails>
 */
class PurchaseDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'purchase_id' => Purchase::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'quantity' => fake()->numerify('##'),
            'price' => fake()->randomFloat(2,10,100),
        ];
    }
}
