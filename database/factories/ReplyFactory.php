<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
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
        $rand_comment_id = Comment::all()->random()->id;

        $rand_user_id = User::whereNot('roles', 'guest')->get()->random()->id;

        return [
            'reply' => fake()->text(60),
            'comment_id' => $rand_comment_id,
            'user_id' => $rand_user_id,
        ];
    }
}
