<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Oleg',
                'email' => 'oleg@mail.ru',
                'login' => 'oleg',
                'password' => '123',
            ]
        ]);

        DB::table('categories')->insert([
            ['name' => 'iPhone'],
            ['name' => 'iPad'],
            ['name' => 'iPod'],
            ['name' => 'Mac']
        ]);

        DB::table('products')->insert([
            [
                'name' => 'iPhone XR',
                'description' => 'excellent, but...',
                'image_path' => 'images/products/iphoneXR.png',
                'price' => 600,
                'rating' => 3.3,
                'category_id' => 1
            ],
            [
                'name' => 'MacBook Air mid 2013',
                'description' => 'excellent.',
                'image_path' => 'images/products/macAirMid2013.png',
                'price' => 1000,
                'rating' => 4.5,
                'category_id' => 4
            ],
            [
                'name' => 'MacBook Pro mid 2020',
                'description' => 'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level..',
                'image_path' => 'images/products/macProMid2020.png',
                'price' => 1500,
                'rating' => 3.3,
                'category_id' => 4
            ],
        ]);
    }
}
