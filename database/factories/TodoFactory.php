<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titel' => fake()->sentence(3),
            'deteils' => fake()->sentence(6),
            'status' => fake()->boolean(),
            'user_id' => 1,
        ];
    }
}
