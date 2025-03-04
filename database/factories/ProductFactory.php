<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'disc' => $this->faker->sentence,
            'category_id' => \App\Models\Category::factory(), // Assuming categories are created using the CategoryFactory
            'price' => $this->faker->randomFloat(2, 1, 100), // Random price between 1 and 100
        ];
    }
}
