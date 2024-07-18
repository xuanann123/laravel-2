<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Image;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
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
        return [
            'user_id' => User::factory(),
            'content'=> $this->faker->paragraph,
            'commentable_id' => $this->faker->numberBetween(1, 100),
            'commentable_type' => $this->faker->randomElement([Article::class, Video::class, Image::class]),
        ];
    }
}
