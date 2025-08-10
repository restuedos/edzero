<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin side
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('super_admin');

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin');

        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('manager');

        User::create([
            'name' => 'Developer User',
            'email' => 'developer@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('developer');

        // Client side
        User::create([
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('client');

        User::create([
            'name' => 'Guest User',
            'email' => 'guest@example.com',
            'password' => Hash::make('password'),
        ])->assignRole('guest');
    }
}
