<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Wallet;
use App\Models\KYC;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(5)
            ->has(Wallet::factory())
            ->has(KYC::factory())
            ->create();
    }
}
