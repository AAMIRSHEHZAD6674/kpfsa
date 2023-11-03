<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(EmergencyContactSeeder::class);
        $this->call(BankAccountSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
