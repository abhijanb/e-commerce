<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the array with user data
        $users = [
            [
                'name' => 'admin',
                'role' => 'user',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'), // Hash the password
                'remember_token' => Str::random(10),
            ],
            // Additional users can be added here
        ];

        // Loop through each user and create a record in the users table
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
