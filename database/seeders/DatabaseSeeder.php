<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use UsersSeeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call(UsersSeeder::class);
    }
}
