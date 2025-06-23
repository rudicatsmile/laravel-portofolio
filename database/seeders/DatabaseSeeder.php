<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            ConfigSeeder::class,
        ]);
    }
}

// User::create([
//     'name' => 'Admin',
//     'email' => 'admin@example.com',
//     'email_verified_at' => now(),
//     'password' => bcrypt('password'),
//     'remember_token' => Str::random(10),
//     'created_at' => now(),
//     'updated_at' => now()
// ]);
