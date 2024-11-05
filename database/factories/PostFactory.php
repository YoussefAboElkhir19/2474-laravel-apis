<?php

namespace Database\Factories;

use App\Models\PostStatus;
use App\Models\User;
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
    public function definition(): array
    {

        $rand_sentences_count = fake()->numberBetween(1, 7);

        $rand_user_id = User::all()->random()->id;

        $rand_post_status_id = PostStatus::all()->random()->id;

        return [
            'title' => fake()->text(100),
            'body' => fake()->paragraph($rand_sentences_count),
            'user_id' => $rand_user_id,
            'post_status_id' => $rand_post_status_id
        ];
    }
}
