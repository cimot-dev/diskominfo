<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'categories_id' => Category::inRandomOrder()->first()->id,
            'author_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            // 'status' => $this->faker->randomElement(),
            'image' => $this->faker->imageUrl(800, 600, 'cats', true),
            'content' => $this->faker->paragraphs(3, true),
            'slug' => Str::slug($this->faker->sentence()),
        ];
    }
}