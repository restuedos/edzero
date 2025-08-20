<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // Admin side
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('super_admin');

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('admin');

        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('manager');

        User::create([
            'name' => 'Developer User',
            'email' => 'developer@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('developer');

        // Client side
        User::create([
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('client');

        User::create([
            'name' => 'Guest User',
            'email' => 'guest@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $now,
        ])->assignRole('guest');
    }
}
