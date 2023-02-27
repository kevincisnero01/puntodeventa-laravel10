<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'ci' => fake()->numerify('########'),
            'rif' => fake()->numerify('J#########'),
            'address' => fake()->address(),
            'phone' => fake()->randomElement(['0412','0416','0414']).'-'.fake()->numerify('#######'),
            'email' => fake()->unique()->email(),
        ];
    }
}


