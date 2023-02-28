<?php

namespace Database\Factories;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'provider_id' => Provider::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'purchase_date' => fake()->date('d-m-Y','now'),
            'tax' => 16,
            'total' => 100.00,
            'status' => fake()->randomElement(['VALID','CANCELLED']),
            'image' => fake()->image(null,640,480,null,false),
        ];
    }
}
