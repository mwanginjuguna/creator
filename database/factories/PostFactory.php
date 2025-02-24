<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string<Post>
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->realTextBetween(60, 80);
        $category = $this->faker->word();
        $tag = $this->faker->word();
        $status = Arr::random(['Draft', 'Published']);

        return [
            'title' => $title,
            'excerpt' => $this->faker->realTextBetween(150, 160),
            'slug' => Str::slug($title),
            'category' => $category,
            'tag' => $tag,
            'body' => $this->faker->paragraphs(rand(10, 20), true),
            'status' => $status,
            'is_public' => $this->faker->boolean(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'author' => $this->faker->name(),
        ];
    }

    /**
     * Indicate that the post is published.
     *
     * @return Factory
     */
    public function published(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'Published',
            ];
        });
    }

    /**
     * Indicate that the post is draft.
     *
     * @return Factory
     */
    public function draft(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'Draft',
            ];
        });
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Post $post) {
            // You can add any post-creation logic here if needed
        });
    }
}
