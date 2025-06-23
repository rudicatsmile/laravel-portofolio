<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            [
                'name' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'name' => 'blogname',
                'value' => 'mubatekno'
            ],
            [
                'name' => 'title',
                'value' => 'Welcome to my blog'
            ],
            [
                'name' => 'caption',
                'value' => 'Welcome to blog home'
            ],
            [
                'name' => 'title',
                'value' => 'A Bootstrap 5 starter layout for your next blog homepage'
            ],
            [
                'name' => 'ads_widget',
                'value' => 'adsense 1'
            ],
            [
                'name' => 'ads_header',
                'value' => 'adsense header'
            ],
            [
                'name' => 'ads_footer',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'phone',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'email',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'facebook',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'instagram',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'youtube',
                'value' => 'adsense footer'
            ],
            [
                'name' => 'footer',
                'value' => 'muba teknologi'
            ],

        ]);
    }
}
