<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2,10,6000),
            'image' =>base64_encode(Http::get(fake()->imageUrl())),
            'stock_quantity' => fake()->numberBetween(20, 100),
            'category' => fake()->randomElement(['cap', 'bag', 'poster', 'other']),
        ];
    }
}


