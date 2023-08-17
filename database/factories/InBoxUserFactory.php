<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InBoxUser>
 */
class InBoxUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = $this->faker->randomElement(User::pluck('id'));
        return [
            'user_id' => $userId,
            'subject' => fake()->sentence,
            'message' => fake()->paragraph,
        ];
    }
}
