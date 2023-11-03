<?php

namespace Database\Seeders;

use App\Models\hr\EmergencyContact;
use Database\Factories\hr\EmergencyContactFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmergencyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmergencyContact::factory()
            ->count(10)
            ->create();
    }
}
