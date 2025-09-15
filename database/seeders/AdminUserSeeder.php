<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        if (! User::where('email', 'admin@aiimsdeoghar.edu.in')->exists()) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@aiimsdeoghar.edu.in',
                'password' => Hash::make('ChangeMe123!'),
                'is_admin' => true,
                'role' => 'admin',
            ]);
        } else {
            User::where('email', 'admin@aiimsdeoghar.edu.in')->update([
                'is_admin' => true,
                'role' => 'admin',
            ]);
        }
    }
}


