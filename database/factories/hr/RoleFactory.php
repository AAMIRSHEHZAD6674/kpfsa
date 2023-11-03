<?php

namespace Database\Factories\hr;

use App\Models\hr\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'role' => fake()->randomElement(['ad', 'fso', 'dd', 'district']),
            'status' => fake()->boolean(),
            'created_by' => User::factory(),
        ];
    }
}
