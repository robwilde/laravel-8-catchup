<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        User::factory(5)->create();

        $this->call([CategorySeeder::class]);

        Post::factory(10)->create();
    }
}
