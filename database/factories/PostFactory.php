<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "user_id" => mt_rand(1,21),
            "category_id" => mt_rand(1,2),
            "title" => $this->faker->sentence(mt_rand(1,8)),
            "slug" => $this->faker->unique()->slug(mt_rand(1,8)),
            "excerpt" => $this->faker->sentence(mt_rand(5,15)),
            "description" => $this->faker->paragraph(6,15),
        ];
    }
}
