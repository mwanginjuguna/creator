<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statusOptions = ['held', 'published'];
        return [
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'message' => $this->faker->paragraph(),
            'status' => Arr::random($statusOptions),
            'is_public' => $this->faker->boolean(80),
        ];
    }

    /**
     * Indicate that the comment is published.
     *
     * @return Factory
     */
    public function published(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'published',
            ];
        });
    }

    /**
     * Indicate that the comment is held.
     *
     * @return Factory
     */
    public function held(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'held',
            ];
        });
    }
}
