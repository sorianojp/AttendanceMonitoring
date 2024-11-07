<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create an admin user
          User::create([
            'name' => 'Admin',
            'email' => 'admin@isudd.com',
            'password' => Hash::make('Universidad2021'),
        ]);
    }
}
