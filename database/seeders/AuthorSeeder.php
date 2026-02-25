<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Author;

use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder

{

    public function run(): void

    {

        // Clear existing data

        DB::table('authors')->truncate();

        $authors = [

            [

                'name' => 'William Shakespeare',

                'db_name' => 'Shakespeare, William, 1564-1616',

                'image' => 'https://media.librorabookofficial.win/williamshakespeare.jpg.jpeg',

                'description' => 'English playwright, poet, and actor, widely regarded as the greatest writer in the English language',

                'color' => '#2B6CB0',

                'display_order' => 1,

                'is_active' => true,

            ],

            [

                'name' => 'Charles Dickens',

                'db_name' => 'Dickens, Charles, 1812-1870',

                'image' => 'https://media.librorabookofficial.win/charlesdickens.jpg.jpeg',

                'description' => 'Victorian novelist who created some of the world\'s best-known fictional characters',

                'color' => '#4A5568',

                'display_order' => 2,

                'is_active' => true,

            ],

            [

                'name' => 'Mark Twain',

                'db_name' => 'Twain, Mark, 1835-1910',

                'image' => 'https://media.librorabookofficial.win/marktwain.jpg.jpeg',

                'description' => 'American writer, humorist, and lecturer best known for The Adventures of Tom Sawyer',

                'color' => '#D97706',

                'display_order' => 3,

                'is_active' => true,

            ],

            [

                'name' => 'Mary Shelley',

                'db_name' => 'Shelley, Mary Wollstonecraft, 1797-1851',

                'image' => 'https://media.librorabookofficial.win/marywollstonecraft.jpg.jpeg',

                'description' => 'English novelist who wrote the Gothic novel Frankenstein',

                'color' => '#7C3AED',

                'display_order' => 4,

                'is_active' => true,

            ],

            [

                'name' => 'Jane Austen',

                'db_name' => 'Austen, Jane, 1775-1817',

                'image' => 'https://media.librorabookofficial.win/janeausten.jpg.jpeg',

                'description' => 'English novelist known for her six major novels including Pride and Prejudice',

                'color' => '#EC4899',

                'display_order' => 5,

                'is_active' => true,

            ],

            [

                'name' => 'Arthur Conan Doyle',

                'db_name' => 'Doyle, Arthur Conan, 1859-1930',

                'image' => 'https://media.librorabookofficial.win/arthurconan.jpg.jpeg',

                'description' => 'British writer best known for his detective fiction featuring Sherlock Holmes',

                'color' => '#059669',

                'display_order' => 6,

                'is_active' => true,

            ],

            [

                'name' => 'Alexandre Dumas',

                'db_name' => 'Dumas, Alexandre, 1802-1870',

                'image' => 'https://media.librorabookofficial.win/alexandredumas.jpg.jpeg',

                'description' => 'French writer best known for The Three Musketeers and The Count of Monte Cristo',

                'color' => '#DC2626',

                'display_order' => 7,

                'is_active' => true,

            ],

        ];

        foreach ($authors as $author) {

            Author::create($author);

        }

        $this->command->info('7 authors have been seeded successfully!');

    }

}
