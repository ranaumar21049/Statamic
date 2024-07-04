<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User',
            'email' => 'user@cedar.com',
            'email_verified_at' => '2024-04-09 05:31:55.000',
            'password' => Hash::make('11223344'),
        ])->assignRole('user');
    }
}
