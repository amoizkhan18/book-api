<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PopularAudiobook;
use Illuminate\Support\Facades\DB;

class PopularAudiobooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('popular_audiobooks')->truncate();

$popularAudiobooks = [

    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'bookdesc' => 'A timeless romantic classic following Elizabeth Bennet as she navigates love, society, and misunderstanding in 19th-century England. A brilliant blend of wit, romance, and social commentary.',
        'imageurl' => 'https://media.librorabookofficial.win/prideandprejudice.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/prideandprejudice_1005_librivox/prideandprejudice_01_austen_64kb.mp3"
        ]),
        'genres' => json_encode(['Romance', 'Classic Literature']),
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'Meditations',
        'author' => 'Marcus Aurelius',
        'bookdesc' => 'A powerful collection of personal reflections by the Roman Emperor and Stoic philosopher. This timeless work explores discipline, virtue, and finding peace within life’s challenges.',
        'imageurl' => 'https://media.librorabookofficial.win/meditations.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/meditations_0708_librivox/meditations_00_marcusaurelius_64kb.mp3"
        ]),
        'genres' => json_encode(['Philosophy', 'Non-fiction']),
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'Dracula',
        'author' => 'Bram Stoker',
        'bookdesc' => 'A chilling gothic masterpiece that follows Count Dracula’s dark quest in England. Filled with suspense and horror, this novel defined the modern vampire legend.',
        'imageurl' => 'https://media.librorabookofficial.win/dracula.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/dracula_1006_librivox/dracula_01_stoker_64kb.mp3"
        ]),
        'genres' => json_encode(['Horror', 'Gothic Fiction']),
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'Crime and Punishment',
        'author' => 'Fyodor Dostoyevsky',
        'bookdesc' => 'A psychological masterpiece exploring guilt, morality, and redemption. Follow Raskolnikov’s intense inner struggle in this profound classic of world literature.',
        'imageurl' => 'https://media.librorabookofficial.win/crimeandpunishment.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/crime_and_punishment_0902_librivox/crime_and_punishment_01_64kb.mp3"
        ]),
        'genres' => json_encode(['Psychological Fiction', 'Classic Literature']),
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'As a Man Thinketh',
        'author' => 'James Allen',
        'bookdesc' => 'A timeless self-development classic revealing how thoughts shape character and destiny. An inspiring guide to mindset, discipline, and purposeful living.',
        'imageurl' => 'https://media.librorabookofficial.win/asamanthinketh.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/as_a_man_thinketh_mc_librivox/asamanthinketh_0_allen_64kb.mp3"
        ]),
        'genres' => json_encode(['Self-Development', 'Philosophy']),
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'The Adventures of Huckleberry Finn',
        'author' => 'Mark Twain',
        'bookdesc' => 'Join Huck Finn on an unforgettable journey down the Mississippi River. A powerful coming-of-age story filled with adventure, humor, and social insight.',
        'imageurl' => 'https://media.librorabookofficial.win/adventuresofhuckleberryfinn.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/huckleberry_mfs_librivox/huckleberry_finn_01_twain_64kb.mp3"
        ]),
        'genres' => json_encode(['Adventure', 'Classic Literature']),
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'The Return of Sherlock Holmes',
        'author' => 'Arthur Conan Doyle',
        'bookdesc' => 'The legendary detective returns in a thrilling collection of mysteries. Joined by Dr. Watson, Sherlock Holmes once again unravels London’s most puzzling crimes.',
        'imageurl' => 'https://www.loyalbooks.com/image/detail/Return-of-Sherlock-Holmes.jpg',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/return_holmes_0708_librivox/returnofholmes_01_doyle_64kb.mp3"
        ]),
        'genres' => json_encode(['Mystery', 'Detective Fiction']),
        'order' => 7,
        'is_active' => true,
    ],

];

        foreach ($popularAudiobooks as $audiobook) {
            PopularAudiobook::create($audiobook);
        }

        $this->command->info('3 popular audiobooks have been seeded successfully!');
    }
}
