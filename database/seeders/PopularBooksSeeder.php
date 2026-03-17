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
        'bookdesc' => "A thrilling tale of betrayal, revenge, and redemption set against the backdrop of 19th-century France. Wrongfully imprisoned, Edmond Dantès escapes and reinvents himself as the mysterious Count of Monte Cristo. Armed with wealth and intelligence, he carefully executes a masterful plan for justice.",
        'imageurl' => 'https://media.librorabookofficial.win/the_count_of_monte_cristo.png',
        'bookurl' => 'https://media.librorabookofficial.win/thecountofmonte.epub',
        'genres' => json_encode(['Adventure', 'Historical Fiction']),
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'The Divine Comedy',
        'author' => 'Dante Alighieri',
        'bookdesc' => "Dante’s epic journey through the realms of Hell, Purgatory, and Paradise. Guided by reason and faith, the poet explores the nature of sin, redemption, and divine love. A timeless masterpiece that blends profound philosophy, vivid imagery, and spiritual insight.",
        'imageurl' => 'https://media.librorabookofficial.win/the_divine_comedy.png',
        'bookurl' => 'https://media.librorabookofficial.win/thedivinecomedy.epub',
        'genres' => json_encode(['Epic Poetry', 'Religious Literature']),
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'bookdesc' => "Set in the glittering world of the 1920s, this classic explores wealth, ambition, and the illusion of the American Dream. Through the mysterious Jay Gatsby and his longing for Daisy Buchanan, F. Scott Fitzgerald paints a powerful portrait of love, obsession, and tragedy.",
        'imageurl' => 'https://media.librorabookofficial.win/thegreatgatsby.png',
        'bookurl' => 'https://media.librorabookofficial.win/thegreatgatsby.epub',
        'genres' => json_encode(['Classic Literature', 'Tragedy']),
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'The Murder of Roger Ackroyd',
        'author' => 'Agatha Christie',
        'bookdesc' => "A brilliant detective mystery featuring the legendary Hercule Poirot. When the wealthy Roger Ackroyd is found murdered, a web of secrets and lies begins to unravel. Agatha Christie delivers one of the most surprising and ingenious twists in crime fiction.",
        'imageurl' => 'https://media.librorabookofficial.win/the_murder_of_roger_ackroyd.png',
        'bookurl' => 'https://media.librorabookofficial.win/themurderof.epub',
        'genres' => json_encode(['Mystery', 'Crime Fiction']),
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'The Power of Your Subconscious Mind',
        'author' => 'Joseph Murphy',
        'bookdesc' => "A transformative guide to unlocking the hidden power within your mind. Joseph Murphy explains how beliefs and thoughts shape success, health, and happiness. By harnessing the subconscious, readers can overcome obstacles and create a more fulfilling life.",
        'imageurl' => 'https://media.librorabookofficial.win/the_power_of_your_subconscious_mind.png',
        'bookurl' => 'https://media.librorabookofficial.win/thepowerof.epub',
        'genres' => json_encode(['Self-Help', 'Spiritual Growth']),
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'The Prince',
        'author' => 'Niccolò Machiavelli',
        'bookdesc' => "Niccolò Machiavelli’s influential work on politics, leadership, and power. Written as advice for rulers, it explores the realities of governance and the strategies needed to maintain authority. A controversial yet timeless study of ambition, pragmatism, and statecraft.",
        'imageurl' => 'https://media.librorabookofficial.win/the_prince.png',
        'bookurl' => 'https://media.librorabookofficial.win/theprince.epub',
        'genres' => json_encode(['Political Philosophy', 'Classic Literature']),
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'The Richest Man in Babylon',
        'author' => 'George S. Clason',
        'bookdesc' => "A timeless classic that teaches financial wisdom through simple parables set in ancient Babylon. George S. Clason shares powerful lessons on saving, investing, and building wealth. An inspiring guide to mastering money and achieving lasting prosperity.",
        'imageurl' => 'https://media.librorabookofficial.win/the_richest_man_in_babylon.png',
        'bookurl' => 'https://media.librorabookofficial.win/therichestman.epub',
        'genres' => json_encode(['Finance', 'Self-Help']),
        'order' => 7,
        'is_active' => true,
    ],

    [
        'title' => 'The Sun Also Rises',
        'author' => 'Ernest Hemingway',
        'bookdesc' => "Ernest Hemingway’s iconic novel capturing the restless spirit of the “Lost Generation.” Following a group of expatriates in post-war Europe, the story explores love, disillusionment, and the search for meaning. A powerful portrait of life, adventure, and emotional struggle.",
        'imageurl' => 'https://media.librorabookofficial.win/thesunalsorises.png',
        'bookurl' => 'https://media.librorabookofficial.win/thesunalso.epub',
        'genres' => json_encode(['Literary Fiction', 'Classic Literature']),
        'order' => 8,
        'is_active' => true,
    ],

    [
        'title' => 'Think and Grow Rich',
        'author' => 'Napoleon Hill',
        'bookdesc' => "A motivational classic that reveals the principles behind success and achievement. Napoleon Hill studied some of the world’s most successful individuals to uncover the mindset that leads to wealth. A powerful guide to turning ambition into reality.",
        'imageurl' => 'https://media.librorabookofficial.win/think_and_grow_rich.png',
        'bookurl' => 'https://media.librorabookofficial.win/thinkandgrow.epub',
        'genres' => json_encode(['Self-Help', 'Business']),
        'order' => 9,
        'is_active' => true,
    ],

    [
        'title' => 'War and Peace',
        'author' => 'Leo Tolstoy',
        'bookdesc' => "Leo Tolstoy’s monumental novel blending history, philosophy, and human drama. Set during the Napoleonic wars, it follows the lives of Russian families as they face love, loss, and the upheaval of war. A profound exploration of destiny, courage, and the meaning of life.",
        'imageurl' => 'https://media.librorabookofficial.win/war_and_peace.png',
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
