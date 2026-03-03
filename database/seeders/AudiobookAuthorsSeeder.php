<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AudiobookAuthor;
use Illuminate\Support\Facades\DB;

class AudiobookAuthorsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        DB::table('audiobook_authors')->truncate();

        $authors = [
            [
                'name' => 'William Shakespeare',
                'db_name' => 'William Shakespeare',
                'image' => 'https://media.librorabookofficial.win/william.png',
                'description' => 'English playwright, poet, and actor, widely regarded as the greatest writer in the English language',
                'color' => '#2B6CB0',
                'display_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Charles Dickens',
                'db_name' => 'Charles Dickens',
                'image' => 'https://media.librorabookofficial.win/charles.png',
                'description' => 'Victorian novelist who created some of the world\'s best-known fictional characters',
                'color' => '#4A5568',
                'display_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Mark Twain',
                'db_name' => 'Mark Twain',
                'image' => 'https://media.librorabookofficial.win/mark.png',
                'description' => 'American writer, humorist, and lecturer best known for The Adventures of Tom Sawyer',
                'color' => '#D97706',
                'display_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Mary Shelley',
                'db_name' => 'Mary Wollstonecraft Shelley',
                'image' => 'https://media.librorabookofficial.win/mary.png',
                'description' => 'English novelist who wrote the Gothic novel Frankenstein',
                'color' => '#7C3AED',
                'display_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Jane Austen',
                'db_name' => 'Jane Austen',
                'image' => 'https://media.librorabookofficial.win/jane.png',
                'description' => 'English novelist known for her six major novels including Pride and Prejudice',
                'color' => '#EC4899',
                'display_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Arthur Conan Doyle',
                'db_name' => 'Arthur Conan Doyle',
                'image' => 'https://media.librorabookofficial.win/arthur.png',
                'description' => 'British writer best known for his detective fiction featuring Sherlock Holmes',
                'color' => '#059669',
                'display_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Alexandre Dumas',
                'db_name' => 'Alexandre Dumas',
                'image' => 'https://media.librorabookofficial.win/alexandre.png',
                'description' => 'French writer best known for The Three Musketeers and The Count of Monte Cristo',
                'color' => '#DC2626',
                'display_order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($authors as $author) {
            AudiobookAuthor::create($author);
        }

        $this->command->info('7 audiobook authors have been seeded successfully!');
    }
}
