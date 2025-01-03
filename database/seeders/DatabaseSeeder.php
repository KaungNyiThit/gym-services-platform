<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Message;
use App\Models\Trainer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('password'),
        //     'is_admin' => true,
        // ]);

        Message::factory(5)->create();

        Trainer::factory(5)->create(); 

    }
}
