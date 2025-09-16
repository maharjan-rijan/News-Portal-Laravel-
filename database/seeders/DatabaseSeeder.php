<?php

namespace Database\Seeders;

use App\Models\Category;
Use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Newa News',
            'username' => 'newa-news',
            'email' => 'newa-news@gmail.com.np'
        ]);
        
        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
