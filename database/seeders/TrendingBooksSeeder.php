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
        'bookdesc' => "Join Huck Finn on an unforgettable journey down the Mississippi River in this timeless tale of freedom and friendship. Alongside the runaway slave Jim, Huck faces moral dilemmas, adventure, and the realities of society. Mark Twain’s classic captures the spirit of youth and the search for what is truly right.",
        'imageurl' => 'https://media.librorabookofficial.win/adventuresofhuckleberry.png',
        'bookurl' => 'https://media.librorabookofficial.win/adventuresofhuckleberryfinn.epub',
        'genres' => json_encode(['Adventure', 'Classic Literature']),
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'As a Man Thinketh',
        'author' => 'James Allen',
        'bookdesc' => "A powerful exploration of how thoughts shape character, destiny, and success. James Allen reveals that the mind is the master key to happiness and achievement. This classic guide inspires readers to cultivate positive thinking and transform their lives.",
        'imageurl' => 'https://media.librorabookofficial.win/asamanthinketh.png',
        'bookurl' => 'https://media.librorabookofficial.win/asamanthinketh.epub',
        'genres' => json_encode(['Self-Help', 'Personal Development']),
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'Crime and Punishment',
        'author' => 'Fyodor Dostoevsky',
        'bookdesc' => "A gripping psychological drama that delves into guilt, morality, and redemption. Through the troubled mind of Raskolnikov, Dostoevsky examines the consequences of crime and the torment of conscience. A profound novel about justice, suffering, and the possibility of salvation.",
        'imageurl' => 'https://media.librorabookofficial.win/crimeandpunish.png',
        'bookurl' => 'https://media.librorabookofficial.win/crimeandpunishment.epub',
        'genres' => json_encode(['Psychological Fiction', 'Classic Literature']),
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'Dracula',
        'author' => 'Bram Stoker',
        'bookdesc' => "Enter a world of dark mystery where the legendary Count Dracula rises from the shadows. Bram Stoker’s gothic masterpiece blends horror, suspense, and supernatural intrigue. A haunting battle between good and evil unfolds in one of literature’s most iconic vampire tales.",
        'imageurl' => 'https://media.librorabookofficial.win/dracu.png',
        'bookurl' => 'https://media.librorabookofficial.win/dracula.epub',
        'genres' => json_encode(['Horror', 'Gothic Fiction']),
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'Meditations',
        'author' => 'Marcus Aurelius',
        'bookdesc' => "A collection of personal reflections from Roman emperor Marcus Aurelius on wisdom, discipline, and inner peace. Rooted in Stoic philosophy, these timeless thoughts encourage resilience, humility, and clarity of mind. A profound guide to living with purpose and virtue.",
        'imageurl' => 'https://media.librorabookofficial.win/meditation.png',
        'bookurl' => 'https://media.librorabookofficial.win/meditations.epub',
        'genres' => json_encode(['Philosophy', 'Stoicism']),
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'bookdesc' => "Jane Austen’s beloved novel of wit, romance, and social insight. Follow Elizabeth Bennet as she navigates family expectations, misunderstandings, and matters of the heart. A timeless story that celebrates love, growth, and the triumph of true character.",
        'imageurl' => 'https://media.librorabookofficial.win/prideandprejud.png',
        'bookurl' => 'https://media.librorabookofficial.win/prideandprejudice.epub',
        'genres' => json_encode(['Romance', 'Classic Literature']),
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'Siddhartha',
        'author' => 'Hermann Hesse',
        'bookdesc' => "A spiritual journey of self-discovery set in ancient India. Hermann Hesse’s masterpiece follows Siddhartha as he seeks enlightenment beyond teachings and traditions. A beautifully written exploration of wisdom, inner peace, and the meaning of life.",
        'imageurl' => 'https://media.librorabookofficial.win/sidh.png',
        'bookurl' => 'https://media.librorabookofficial.win/sidharta.epub',
        'genres' => json_encode(['Spiritual Fiction', 'Philosophy']),
        'order' => 7,
        'is_active' => true,
    ],

    [
        'title' => 'Tao Te Ching',
        'author' => 'Laozi',
        'bookdesc' => "An ancient philosophical text offering timeless wisdom on harmony, balance, and the nature of existence. Attributed to Laozi, it teaches the art of living in alignment with the Tao—the natural flow of the universe. A profound guide to simplicity, humility, and inner tranquility.",
        'imageurl' => 'https://media.librorabookofficial.win/tao.png',
        'bookurl' => 'https://media.librorabookofficial.win/taoteching.epub',
        'genres' => json_encode(['Philosophy', 'Spirituality']),
        'order' => 8,
        'is_active' => true,
    ],

    [
        'title' => 'The Art of War',
        'author' => 'Sun Tzu',
        'bookdesc' => "Sun Tzu’s legendary treatise on strategy, leadership, and the psychology of conflict. Though written for warfare, its principles apply to business, politics, and life itself. A timeless manual on discipline, planning, and the power of intelligent strategy.",
        'imageurl' => 'https://media.librorabookofficial.win/artof.png',
        'bookurl' => 'https://media.librorabookofficial.win/theartofwar.epub',
        'genres' => json_encode(['Strategy', 'Military Philosophy']),
        'order' => 9,
        'is_active' => true,
    ],

    [
        'title' => 'The Book of Five Rings',
        'author' => 'Miyamoto Musashi',
        'bookdesc' => "Written by the legendary samurai Miyamoto Musashi, this classic reveals the philosophy of mastery and strategy. Through five symbolic “rings,” Musashi shares lessons on discipline, perception, and the warrior’s mindset. A timeless guide to strategy, focus, and personal excellence.",
        'imageurl' => 'https://media.librorabookofficial.win/bookoffive.png',
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
