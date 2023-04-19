<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'excerpt' => fake()->sentence(),
            'content' => fake()->paragraph(2),
            'image' => fake()->randomElement(['/event-images/event1.png','/event-images/event2.png','/event-images/event3.png','/event-images/event3.png'])
        ];
    }
}
