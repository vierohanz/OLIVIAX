<?php

namespace Database\Seeders;

use App\Models\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Workbench\App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Dinkes
        Users::factory()->create([
            'name' => 'Dinas Kesehatan',
            'username' => 'dinkes',
            'email' => 'dinkes@gmail.com',
            'role' => 1,
            'password' => 'Password123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Posyandu
        Users::factory()->create([
            'name' => 'Posyandu',
            'username' => 'posyandu',
            'email' => 'posyandu@gmail.com',
            'role' => 2,
            'password' => 'Password123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ibu
        Users::factory()->create([
            'name' => 'Ibu',
            'username' => 'ibu',
            'email' => 'ibu@gmail.com',
            'role' => 3,
            'password' => 'Password123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
