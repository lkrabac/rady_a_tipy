<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->words(4, true);

        return [
            'user_id' => 1,
            'title' => ucfirst($title),
            'slug' => Str::slug($title, '-'),
            'text' => fake()->paragraphs(5, true),
            'img' => fake()->imageUrl()
        ];
    }
}
