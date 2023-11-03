<?php

namespace Database\Factories\hr;

use App\Models\hr\District;
use App\Models\hr\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory(),
            'district_id' => District::factory(),
            'current_address' => fake()->address(),
            'permanent_address' => fake()->address(),
            'postal_code' => fake()->address(),
            'created_by' => User::factory()
        ];
    }
}
