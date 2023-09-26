<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'sale_date' => fake()->date('Y-m-d','now'),
            'tax' => 16,
            'total' => 100.00,
            'status' => fake()->randomElement(['VALID','CANCELLED']),
        ];
    }
}
