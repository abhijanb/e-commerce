<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
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
            'user_id' => User::factory(), // Generates a new user and uses its ID
            'name' => fake()->name(), // Generates a random name
            'image' => fake()->imageUrl(), // Generates a URL for an image
            'description' => fake()->paragraph(), // Generates a random paragraph for description
'details' => json_encode(collect(range(1, random_int(1, 5)))
    ->mapWithKeys(fn () => [fake()->word() => fake()->word()])
    ->toArray()),
            'price' => fake()->randomFloat(2, 1, 1000), // Generates a random price with 2 decimal places
            'stock' => fake()->numberBetween(1, 100), // Generates a random stock quantity
            'category_id' => Category::factory(), // Generates a new category and uses its ID
            'coupons' => fake()->word(), // Generates a random word for coupons; adjust as needed
        ];
    }
    
}
