<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $users = User::factory(10)->create();
        $firstUser = $users->first();

        $personal =Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'user_id' => $firstUser->id,
            'category_id' => $personal->id,
            'title' => 'Personal',
            'slug' => 'personal',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'lorem'
        ]);

        Post::create([
            'user_id' => $firstUser->id,
            'category_id' => $family->id,
            'title' => 'Family',
            'slug' => 'family',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'lorem'
        ]);
    }
}
