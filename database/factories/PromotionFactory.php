<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(3, true),
            'code' => fake()->regexify('[A-Z]{3}[0-4]{2}'),
            'content' => fake()->sentence(8),
            'image' => fake()->randomElement(['/promo-images/promo1.png','/promo-images/promo2.png','/promo-images/promo3.png']),
            'discount_price' => fake()->numberBetween(1,3) * 1000
        ];
    }
}
