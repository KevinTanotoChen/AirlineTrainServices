<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'schedule_id' => fake()->numberBetween(1, 108)
            'origin_station_id' => fake()->numberBetween(1,4),
            'destination_station_id' => fake()->numberBetween(1,4),
            'train_id' => fake()->numberBetween(1,6),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'date' => fake()->date(),
            'seat' => fake()->numberBetween(1,10)
        ];
    }
}
