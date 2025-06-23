<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}