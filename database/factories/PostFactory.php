<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fn() => User::all()->random()->id,
            'category_id' => fn() => Category::all()->random()->id,
            'title' => $this->faker->sentence(3),
            'excerpt' => $this->faker->sentence(7),
            'body' => $this->faker->paragraph
        ];
    }
}
