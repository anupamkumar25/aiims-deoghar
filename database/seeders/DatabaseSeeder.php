<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an initial admin user if none exists
        if (! User::where('email', 'admin@aiimsdeoghar.edu.in')->exists()) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@aiimsdeoghar.edu.in',
                'password' => Hash::make('ChangeMe123!'),
                'is_admin' => true,
            ]);
        }

        // Seed only the admin by default to avoid duplicates
        $this->call([
            AdminUserSeeder::class,
        ]);
    }
}
