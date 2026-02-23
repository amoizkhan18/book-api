<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PopularBook;
use Illuminate\Support\Facades\DB;

class PopularBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('popular_books')->truncate();

$popularBooks = [

    [
        'title' => 'The Count of Monte Cristo',
        'author' => 'Alexandre Dumas',
        'bookdesc' => "An epic tale of betrayal and revenge as Edmond Dantès rises from prison to power.",
        'imageurl' => 'https://media.librorabookofficial.win/thecountofmonte.png',
        'bookurl' => 'https://media.librorabookofficial.win/thecountofmonte.epub',
        'genres' => json_encode(['Adventure', 'Historical Fiction']),
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'The Divine Comedy',
        'author' => 'Dante Alighieri',
        'bookdesc' => "A poetic journey through Hell, Purgatory, and Paradise exploring sin and redemption.",
        'imageurl' => 'https://media.librorabookofficial.win/thedivinecomedy.png',
        'bookurl' => 'https://media.librorabookofficial.win/thedivinecomedy.epub',
        'genres' => json_encode(['Epic Poetry', 'Religious Literature']),
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'bookdesc' => "A tragic Jazz Age story of love, ambition, and the illusion of the American Dream.",
        'imageurl' => 'https://media.librorabookofficial.win/thegreatgatsby.png',
        'bookurl' => 'https://media.librorabookofficial.win/thegreatgatsby.epub',
        'genres' => json_encode(['Classic Literature', 'Tragedy']),
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'The Murder of Roger Ackroyd',
        'author' => 'Agatha Christie',
        'bookdesc' => "A masterful mystery filled with shocking twists and brilliant detective work.",
        'imageurl' => 'https://media.librorabookofficial.win/themurderof.png',
        'bookurl' => 'https://media.librorabookofficial.win/themurderof.epub',
        'genres' => json_encode(['Mystery', 'Crime Fiction']),
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'The Power of Your Subconscious Mind',
        'author' => 'Joseph Murphy',
        'bookdesc' => "Discover how belief and positive thinking can unlock your hidden potential.",
        'imageurl' => 'https://media.librorabookofficial.win/thepowerof.png',
        'bookurl' => 'https://media.librorabookofficial.win/thepowerof.epub',
        'genres' => json_encode(['Self-Help', 'Spiritual Growth']),
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'The Prince',
        'author' => 'Niccolò Machiavelli',
        'bookdesc' => "A bold examination of power, politics, and leadership strategy.",
        'imageurl' => 'https://media.librorabookofficial.win/theprince.png',
        'bookurl' => 'https://media.librorabookofficial.win/theprince.epub',
        'genres' => json_encode(['Political Philosophy', 'Classic Literature']),
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'The Richest Man in Babylon',
        'author' => 'George S. Clason',
        'bookdesc' => "Timeless financial lessons on saving, investing, and building wealth.",
        'imageurl' => 'https://media.librorabookofficial.win/therichestman.png',
        'bookurl' => 'https://media.librorabookofficial.win/therichestman.epub',
        'genres' => json_encode(['Finance', 'Self-Help']),
        'order' => 7,
        'is_active' => true,
    ],

    [
        'title' => 'The Sun Also Rises',
        'author' => 'Ernest Hemingway',
        'bookdesc' => "A defining novel of the Lost Generation exploring love and post-war disillusionment.",
        'imageurl' => 'https://media.librorabookofficial.win/thesunalso.png',
        'bookurl' => 'https://media.librorabookofficial.win/thesunalso.epub',
        'genres' => json_encode(['Literary Fiction', 'Classic Literature']),
        'order' => 8,
        'is_active' => true,
    ],

    [
        'title' => 'Think and Grow Rich',
        'author' => 'Napoleon Hill',
        'bookdesc' => "A motivational classic revealing the principles behind lasting success.",
        'imageurl' => 'https://media.librorabookofficial.win/thinkandgrow.png',
        'bookurl' => 'https://media.librorabookofficial.win/thinkandgrow.epub',
        'genres' => json_encode(['Self-Help', 'Business']),
        'order' => 9,
        'is_active' => true,
    ],

    [
        'title' => 'War and Peace',
        'author' => 'Leo Tolstoy',
        'bookdesc' => "An epic historical masterpiece blending love, war, and destiny.",
        'imageurl' => 'https://media.librorabookofficial.win/warandpeace.png',
        'bookurl' => 'https://media.librorabookofficial.win/warandpeace.epub',
        'genres' => json_encode(['Historical Fiction', 'Classic Literature']),
        'order' => 10,
        'is_active' => true,
    ],

];

        foreach ($popularBooks as $book) {
            PopularBook::create($book);
        }

        $this->command->info('5 popular books have been seeded successfully!');
    }
}
