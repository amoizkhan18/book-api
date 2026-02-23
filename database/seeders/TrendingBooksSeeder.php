<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrendingBook;
use Illuminate\Support\Facades\DB;

class TrendingBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('trending_books')->truncate();

$trendingBooks = [

    [
        'title' => 'Adventures of Huckleberry Finn',
        'author' => 'Mark Twain',
        'bookdesc' => "Join Huck Finn on a powerful journey down the Mississippi River exploring friendship, freedom, and moral courage.",
        'imageurl' => 'https://media.librorabookofficial.win/adventuresofhuckleberryfinn.png',
        'bookurl' => 'https://media.librorabookofficial.win/adventuresofhuckleberryfinn.epub',
        'genres' => json_encode(['Adventure', 'Classic Literature']),
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'As a Man Thinketh',
        'author' => 'James Allen',
        'bookdesc' => "A timeless self-help classic showing how thoughts shape character, success, and destiny.",
        'imageurl' => 'https://media.librorabookofficial.win/asamanthinketh.png',
        'bookurl' => 'https://media.librorabookofficial.win/asamanthinketh.epub',
        'genres' => json_encode(['Self-Help', 'Personal Development']),
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'Crime and Punishment',
        'author' => 'Fyodor Dostoevsky',
        'bookdesc' => "A psychological masterpiece exploring guilt, morality, and redemption in imperial Russia.",
        'imageurl' => 'https://media.librorabookofficial.win/crimeandpunishment.png',
        'bookurl' => 'https://media.librorabookofficial.win/crimeandpunishment.epub',
        'genres' => json_encode(['Psychological Fiction', 'Classic Literature']),
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'Dracula',
        'author' => 'Bram Stoker',
        'bookdesc' => "A chilling gothic novel introducing the legendary Count Dracula in a battle of light and darkness.",
        'imageurl' => 'https://media.librorabookofficial.win/dracula.png',
        'bookurl' => 'https://media.librorabookofficial.win/dracula.epub',
        'genres' => json_encode(['Horror', 'Gothic Fiction']),
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'Meditations',
        'author' => 'Marcus Aurelius',
        'bookdesc' => "Stoic wisdom on resilience, discipline, and inner peace from a Roman emperor.",
        'imageurl' => 'https://media.librorabookofficial.win/meditations.png',
        'bookurl' => 'https://media.librorabookofficial.win/meditations.epub',
        'genres' => json_encode(['Philosophy', 'Stoicism']),
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'bookdesc' => "A beloved romantic classic about love, pride, and personal growth.",
        'imageurl' => 'https://media.librorabookofficial.win/prideandprejudice.png',
        'bookurl' => 'https://media.librorabookofficial.win/prideandprejudice.epub',
        'genres' => json_encode(['Romance', 'Classic Literature']),
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'Siddhartha',
        'author' => 'Hermann Hesse',
        'bookdesc' => "A spiritual journey of enlightenment and self-discovery set in ancient India.",
        'imageurl' => 'https://media.librorabookofficial.win/sidharta.png',
        'bookurl' => 'https://media.librorabookofficial.win/sidharta.epub',
        'genres' => json_encode(['Spiritual Fiction', 'Philosophy']),
        'order' => 7,
        'is_active' => true,
    ],

    [
        'title' => 'Tao Te Ching',
        'author' => 'Laozi',
        'bookdesc' => "Ancient teachings on balance, simplicity, and harmony with life.",
        'imageurl' => 'https://media.librorabookofficial.win/taoteching.png',
        'bookurl' => 'https://media.librorabookofficial.win/taoteching.epub',
        'genres' => json_encode(['Philosophy', 'Spirituality']),
        'order' => 8,
        'is_active' => true,
    ],

    [
        'title' => 'The Art of War',
        'author' => 'Sun Tzu',
        'bookdesc' => "A timeless guide to strategy, leadership, and winning without conflict.",
        'imageurl' => 'https://media.librorabookofficial.win/theartofwar.png',
        'bookurl' => 'https://media.librorabookofficial.win/theartofwar.epub',
        'genres' => json_encode(['Strategy', 'Military Philosophy']),
        'order' => 9,
        'is_active' => true,
    ],

    [
        'title' => 'The Book of Five Rings',
        'author' => 'Miyamoto Musashi',
        'bookdesc' => "Legendary samurai insights on mastery, discipline, and strategy.",
        'imageurl' => 'https://media.librorabookofficial.win/thebookoffiverings.png',
        'bookurl' => 'https://media.librorabookofficial.win/thebookoffiverings.epub',
        'genres' => json_encode(['Strategy', 'Philosophy']),
        'order' => 10,
        'is_active' => true,
    ],

];
        foreach ($trendingBooks as $book) {
            TrendingBook::create($book);
        }

        $this->command->info('5 trending books have been seeded successfully!');
    }
}
