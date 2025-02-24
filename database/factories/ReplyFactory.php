<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'comment_id' => Comment::factory(),
            'reply_id' => null,
            'message' => $this->faker->paragraph(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Reply $reply) {
            if (rand(0, 3) == 0) {
                 Reply::factory()
                     ->create([
                         'reply_id' => $reply->id,
                         'comment_id' => $reply->comment_id,
                         'post_id' => $reply->post_id,
                         'user_id' => User::factory()
                     ]);
             }
        });
    }
}
