<?php

namespace Database\Factories\hr;

use App\Models\hr\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmergencyContactFactory extends Factory
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
            'primary_contact' => fake()->phoneNumber(),
            'alternate_contact' => fake()->phoneNumber(),
            'relationship' => fake()->randomElement(['brother','sister','wife','mother','father','guardian','aunt']),
            'created_by' => User::factory(),
        ];
    }
}
