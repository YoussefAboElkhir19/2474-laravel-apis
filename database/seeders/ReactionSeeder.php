<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Reaction;
use App\Models\ReactionType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = 1000;

        $i = 1;

        // $bundles = [];

        while ($i <= $count) {


            $post_id = Post::all()->random()->id; // 50

            $user_id = User::inRandomOrder()->first()->id; // 2


            // Check if the $post_id and $user_id match any records in the table

            $found = Reaction::where('post_id', '=', $post_id)
                ->where('user_id', '=', $user_id)
                ->count();

            // SELECT COUNT(*) FROM reactions WHERE `post_id` = 50 AND `user_id` = 2;
            if ($found === 0) {

                $reaction_type_id = ReactionType::inRandomOrder()->first()->id; // 5

                Reaction::create([
                    'user_id' => $user_id,
                    'post_id' => $post_id,
                    'reaction_type_id' => $reaction_type_id,
                ]);

                $i++;
            }
        }
    }
}
