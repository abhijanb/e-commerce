<?php

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
                'name' => 'John Doe',
                'role' => 'admin',
                'email' => 'john@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Hash the password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'user',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Alice Johnson',
                'role' => 'user',
                'email' => 'alice@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ];

        // Loop through each user and create a record in the users table
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
