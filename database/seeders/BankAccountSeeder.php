<?php

namespace Database\Seeders;

use App\Models\hr\BankAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BankAccount::factory()
            ->count(10)
            ->create();
    }
}
