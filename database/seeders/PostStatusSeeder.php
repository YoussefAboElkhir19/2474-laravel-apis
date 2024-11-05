<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PostStatus;

class PostStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Pending',
            'Published',
            'Cancelled',
            'Postponed',
            'Private',
        ];

        foreach ($types as $type) {
            PostStatus::create(
                [
                    'type' => $type
                ]
            );
        }
    }
}
