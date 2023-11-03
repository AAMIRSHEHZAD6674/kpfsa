<?php

namespace Database\Factories\hr;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DistrictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'operational' => fake()->boolean(),
            'code' => fake()->postcode(),
            'operational_district_id' => fake()->randomNumber(1,10),
            'division' => fake()->randomElement(['peshawar', 'malakand', 'mardan', 'kohat', 'abbottabad', 'dikhan', 'bannu']),
        ];
    }
}
