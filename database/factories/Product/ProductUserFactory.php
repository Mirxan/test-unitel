<?php

namespace Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Product>
 */
class ProductUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::query()->get();
        $products = Product::query()->get();
        return [
            'user_id' => fake()->randomElement($users)->id,
            'product_id' => fake()->randomElement($products)->id,
        ];
    }
}
