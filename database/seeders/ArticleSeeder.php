<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Get the actual category IDs from the categories table
        $technology = Category::where('slug', 'technology')->first();
        $programming = Category::where('slug', 'programming')->first();
        $webDev = Category::where('slug', 'web-development')->first();
        $mobileDev = Category::where('slug', 'mobile-development')->first();

        // Get user IDs
        $admin = User::where('email', 'admin@example.com')->first();
        $editor = User::where('email', 'editor@example.com')->first();

        // Check if all categories and required users exist
        if (!$technology || !$programming || !$webDev || !$mobileDev) {
            throw new \Exception('Required categories not found in the database');
        }

        if (!$admin || !$editor) {
            throw new \Exception('Required users not found in the database');
        }

        DB::table('articles')->insert([
            [
                'user_id' => $admin->id,
                'category_id' => $technology->id,
                'title' => 'The Future of AI in Web Development',
                'slug' => Str::slug('The Future of AI in Web Development'),
                'desc' => 'Exploring how artificial intelligence is revolutionizing web development practices and tools.',
                'img' => 'ai_web_dev.jpg',
                'views' => 1500,
                'status' => 'published',
                'publish_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $editor->id,
                'category_id' => $programming->id,
                'title' => 'Mastering Laravel Eloquent Relationships',
                'slug' => Str::slug('Mastering Laravel Eloquent Relationships'),
                'desc' => 'A comprehensive guide to understanding and utilizing Eloquent relationships in Laravel applications.',
                'img' => 'eloquent_laravel.jpg',
                'views' => 2300,
                'status' => 'published',
                'publish_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $admin->id,  // Added missing user_id
                'category_id' => $webDev->id,
                'title' => 'Building RESTful APIs with Node.js and Express',
                'slug' => Str::slug('Building RESTful APIs with Node.js and Express'),
                'desc' => 'Learn to create robust and scalable RESTful APIs using Node.js and the Express framework.',
                'img' => 'nodejs_express.jpg',
                'views' => 1800,
                'status' => 'published',
                'publish_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $editor->id,  // Added missing user_id
                'category_id' => $mobileDev->id,
                'title' => 'Introduction to React Native for Cross-Platform Apps',
                'slug' => Str::slug('Introduction to React Native for Cross-Platform Apps'),
                'desc' => 'Get started with React Native to build native mobile applications for iOS and Android from a single codebase.',
                'img' => 'react_native.jpg',
                'views' => 2000,
                'status' => 'published',
                'publish_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}