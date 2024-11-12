<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $n=$this->faker->word(),
            'slug' => Str::slug($n),
            'description' => $this->faker->sentences(3, true),
            'body' => $this->faker->paragraphs(6, true)
        ];
    }
}
