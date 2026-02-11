<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AudiobookAuthor;

class AudiobookAuthorSeeder extends Seeder

{

    public function run(): void

    {

        $authors = [

            [

                'name' => 'Stephen King',

                'image' => 'https://media.librorabookofficial.win/pg2649.cover.medium.jpg',

                'description' => 'American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels',

                'color' => '#8B0000',

                'display_order' => 1,

                'is_active' => true,

            ],

            [

                'name' => 'J.K. Rowling',

                'image' => 'https://media.librorabookofficial.win/pg2649.cover.medium.jpg',

                'description' => 'British author, best known for writing the Harry Potter fantasy series',

                'color' => '#4A148C',

                'display_order' => 2,

                'is_active' => true,

            ],

            [

                'name' => 'Neil Gaiman',

                'image' => 'https://media.librorabookofficial.win/pg2649.cover.medium.jpg',

                'description' => 'English author of short fiction, novels, comic books, graphic novels, and films',

                'color' => '#1A237E',

                'display_order' => 3,

                'is_active' => true,

            ],

        ];

        foreach ($authors as $author) {

            AudiobookAuthor::create($author);

        }

    }

}
