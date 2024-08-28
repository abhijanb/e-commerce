<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\TestingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // No need to import UsersSeeder separately as it's in the same namespace
        $this->call(TestingSeeder::class);
       
    }
}
