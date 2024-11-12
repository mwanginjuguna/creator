<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
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
    public function definition(): array
    {
        $title = $this->faker->realText(92).' - ' . Arr::random(['tips', 'news', 'tutorial', 'opinion']);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->realTextBetween(),
            'body' => $this->faker->paragraphs(6, true),
            'status' => 'Published',
            'author' => $this->faker->name,
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'is_public' => true,
            'views' => rand(0, 100000)
        ];
    }
}
