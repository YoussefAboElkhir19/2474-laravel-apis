<?php

namespace Database\Seeders;

use App\Models\ReactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Like',
            'Love',
            'Care',
            'Happy',
            'Sad',
            'Laugh',
        ];

        foreach ($types as $type) {
            ReactionType::factory()->create([
                'type' => $type
            ]);
        }
    }
}
