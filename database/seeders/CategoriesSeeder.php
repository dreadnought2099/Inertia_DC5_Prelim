<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics & Gadgets', 'description' => 'Latest gadgets and tech for a connected life.'],
            ['name' => 'Home Appliances', 'description' => 'Enhance comfort with modern home appliances.'],
            ['name' => 'FAshion & Apparel', 'description' => 'Stylish clothing, shoes, and accessories.'],
            ['name' => 'Beauty and Personal Care', 'description' => 'Skincare, haircare, and cosmetics for a polished look.'],
            ['name' => 'Sports and Outdoors', 'description' => 'Gear for fitness and outdoor adventures.'],
            ['name' => 'Toys and Games', 'description' => 'Fun and educational toys for all ages.'],
            ['name' => 'Books and Entertainment Media', 'description' => 'Latest books, movies, and music.'],
            ['name' => 'Health and Wellness', 'description' => 'Products to support a healthy lifestyle.'],
            ['name' => 'Automotive & Garage', 'description' => 'Car care, accessories, and replacement parts.'],
            ['name' => 'Groceries and Gourmet Food', 'description' => 'Everyday essentials and gourmet treats.'],
        ];

        foreach($categories as $category) {
            \App\Models\Categories::create($category);
        }
    }
}
