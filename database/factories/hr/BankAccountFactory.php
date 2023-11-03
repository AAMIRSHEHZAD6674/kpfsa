<?php

namespace Database\Factories\hr;

use App\Models\hr\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BankAccountFactory extends Factory
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
            'bank_name' => fake()->randomElement(['ubl','mcb','bok','meezan']),
            'branch_code' => fake()->randomDigit(),
            'branch_address' => fake()->address(),
            'account_title' => fake()->name(),
            'account_number' => fake()->randomDigit(),
            'iban' => fake()->randomNumber(),
            'created_by' => User::factory(),
        ];
    }
}
