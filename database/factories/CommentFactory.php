<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
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
        $rand_post_id = Post::all()->random()->id;

        $rand_user_id = User::whereNot('roles', 'guest')->get()->random()->id;

        return [
            'comment' => fake()->text(150),
            'post_id' => $rand_post_id,
            'user_id' => $rand_user_id,
        ];
    }
}
