<?php

namespace Database\Factories\hr;

use App\Models\hr\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfileFactory extends Factory
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
            'mobile_no' => fake()->phoneNumber(),
            'alternate_mobile_no' => fake()->phoneNumber(),
            'cnic' => fake()->randomDigit(),
            'gender' => fake()->randomElement(['male', 'female']),
            'date_of_birth' => fake()->date(),
            'marital_status' => fake()->randomElement(['single', 'married']),
            'father_name' => fake()->name(),
            'spouse_name' => fake()->name(),
            'spouse_cnic' => fake()->randomDigit(),
            'created_by' => User::factory(),
        ];
    }
}
