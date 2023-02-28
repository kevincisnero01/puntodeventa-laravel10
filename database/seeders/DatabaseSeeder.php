<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Provider::factory(5)->create();
        \App\Models\Product::factory(25)->create();
        \App\Models\Client::factory(5)->create();
        \App\Models\Purchase::factory(5)->create();
        \App\Models\PurchaseDetails::factory(15)->create();
        \App\Models\Sale::factory(5)->create();
        \App\Models\SaleDetails::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
