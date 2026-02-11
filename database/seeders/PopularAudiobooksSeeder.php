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
                'title' => 'Gulliver s Travels',
                'author' => 'By: Jonathan Swift (1667-1745)',
                'bookdesc' => 'A satirical voyage through strange and wondrous lands, where encounters with tiny people, giants, and other fantastical societies reveal sharp truths about human nature, politics, and pride.',
                'imageurl' => 'https://www.loyalbooks.com/image/detail/Gulliver-s-Travels.jpg',
                'audiolinks' => json_encode([
                    'https://media.librorabookofficial.win/gulliverstravels_00_swift_64kb.mp3',
                    'https://media.librorabookofficial.win/gulliverstravels_01_swift_64kb.mp3',
                    'https://media.librorabookofficial.win/gulliverstravels_02_swift_64kb.mp3',
                    'https://media.librorabookofficial.win/gulliverstravels_03_swift_64kb.mp3',
                    'https://media.librorabookofficial.win/gulliverstravels_04_swift_64kb.mp3',
                ]),
                'genres' => json_encode(['Fantasy']),
                'color' => '#24150E',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Tarzan of the Apes',
                'author' => 'By: Edgar Rice Burroughs (1875-1950)',
                'bookdesc' => 'Orphaned in the African jungle, a boy is raised by great apes, growing into a powerful and resourceful man. Torn between the wild world that shaped him and the human heritage he discovers, he must choose where he truly belongs.',
                'imageurl' => 'https://www.loyalbooks.com/image/detail/Tarzan-of-the-Apes.jpg',
                'audiolinks' => json_encode([
                    'https://media.librorabookofficial.win/tarzan_of_the_apes_01_burroughs_64kb.mp3',
                    'https://media.librorabookofficial.win/tarzan_of_the_apes_02_burroughs_64kb.mp3',
                    'https://media.librorabookofficial.win/tarzan_of_the_apes_03_burroughs_64kb.mp3',
                    'https://media.librorabookofficial.win/tarzan_of_the_apes_04_burroughs_64kb.mp3',
                    'https://media.librorabookofficial.win/tarzan_of_the_apes_05_burroughs_64kb.mp3',
                ]),
                'genres' => json_encode(['Fantasy']),
                'color' => '#0E0520',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Anthem',
                'author' => 'By: Ayn Rand (1905-1982)',
                'bookdesc' => 'In a dark future where individuality is forbidden, one man rediscovers the power of the self. Defying a world that speaks only in "we," he seeks freedom, knowledge, and the right to say "I."',
                'imageurl' => 'https://www.loyalbooks.com/image/detail/Anthem.jpg',
                'audiolinks' => json_encode([
                    'https://media.librorabookofficial.win/anthem_01_rand_64kb.mp3',
                    'https://media.librorabookofficial.win/anthem_02_rand_64kb.mp3',
                    'https://media.librorabookofficial.win/anthem_03_rand_64kb.mp3',
                    'https://media.librorabookofficial.win/anthem_04_rand_64kb.mp3',
                    'https://media.librorabookofficial.win/anthem_05_rand_64kb.mp3',
                ]),
                'genres' => json_encode(['Fantasy']),
                'color' => '#280F03',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($popularAudiobooks as $audiobook) {
            PopularAudiobook::create($audiobook);
        }

        $this->command->info('3 popular audiobooks have been seeded successfully!');
    }
}
