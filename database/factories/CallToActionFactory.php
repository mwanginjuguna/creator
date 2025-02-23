<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CallToAction>
 */
class CallToActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'url' => $this->faker->url(),
            'button_text' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'image_url' => $this->faker->imageUrl(),
            // 'call_to_actionable_id' and 'call_to_actionable_type' will be set when using factory relationships
        ];
    }
}
