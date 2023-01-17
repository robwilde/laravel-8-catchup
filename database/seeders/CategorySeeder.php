<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = ['Personal', 'Work', 'Hobbies'];
        foreach($categories as $category){
            \App\Models\Category::factory()->create([
                'name' => $category,
            ]);
        }
    }
}
