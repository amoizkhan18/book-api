<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Author;

class AuthorSeeder extends Seeder

{

    public function run(): void

    {

        $authors = [

            [

                'name' => 'Barbara Cartland',

                'image' => 'https://media.librorabookofficial.win/pg446.cover.medium.jpg',

                'description' => 'British author who wrote romance novels, one of the best-selling authors worldwide',

                'color' => '#FF6B9D',

                'display_order' => 1,

                'is_active' => true,

            ],

            [

                'name' => 'Agatha Christie',

                'image' => 'https://media.librorabookofficial.win/pg446.cover.medium.jpg',

                'description' => 'English writer known for her detective novels featuring Hercule Poirot and Miss Marple',

                'color' => '#4A5568',

                'display_order' => 2,

                'is_active' => true,

            ],

            [

                'name' => 'William Shakespeare',

                'image' => 'https://media.librorabookofficial.win/pg446.cover.medium.jpg',

                'description' => 'English playwright, poet, and actor, widely regarded as the greatest writer in the English language',

                'color' => '#2B6CB0',

                'display_order' => 3,

                'is_active' => true,

            ],

        ];

        foreach ($authors as $author) {

            Author::create($author);

        }

    }

}
