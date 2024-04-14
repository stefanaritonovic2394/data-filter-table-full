<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'status' => fake()->randomElement(['started', 'in progress', 'planned', 'blocked', 'completed']),
            'title' => fake()->sentence,
            'due_at' => fake()->date,
            'details' => fake()->paragraph,
        ];
    }
}
