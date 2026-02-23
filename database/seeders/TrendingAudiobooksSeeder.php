<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrendingAudiobook;
use Illuminate\Support\Facades\DB;

class TrendingAudiobooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('trending_audiobooks')->truncate();

$trendingAudiobooks = [

    [
        'title' => 'The Art of War',
        'author' => 'Sun Tzu',
        'bookdesc' => 'A timeless guide to strategy, leadership, and victory. This classic reveals powerful insights on warfare, planning, and decision-making that remain influential in business, politics, and everyday life.',
        'imageurl' => 'https://media.librorabookofficial.win/theartofwar.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/art_war_ps_librivox/artofwar_01_sun_64kb.mp3",
            "http://www.archive.org/download/art_war_ps_librivox/artofwar_02_sun_64kb.mp3",
            "http://www.archive.org/download/art_war_ps_librivox/artofwar_03_sun_64kb.mp3",
            "http://www.archive.org/download/art_war_ps_librivox/artofwar_04_sun_64kb.mp3"
        ]),
        'genres' => json_encode(['Philosophy', 'Strategy']),
        'color' => '#1E2A38',
        'order' => 1,
        'is_active' => true,
    ],

    [
        'title' => 'War and Peace',
        'author' => 'Leo Tolstoy',
        'bookdesc' => 'A sweeping epic of love, war, and destiny set during the Napoleonic era. Tolstoy masterfully portrays families navigating passion, loss, and the human spirit in times of historic upheaval.',
        'imageurl' => 'https://media.librorabookofficial.win/warandpeace.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/war_and_peace_01_librivox/war_and_peace_01_01_tolstoy_64kb.mp3"
        ]),
        'genres' => json_encode(['Historical Fiction', 'Classic Literature']),
        'color' => '#3A1F1F',
        'order' => 2,
        'is_active' => true,
    ],

    [
        'title' => 'The Prince',
        'author' => 'Niccolò Machiavelli',
        'bookdesc' => 'A bold and pragmatic guide to political power and leadership. Machiavelli explores the qualities of rulers and the realities of governing in a turbulent world.',
        'imageurl' => 'https://media.librorabookofficial.win/theprince.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/prince_bn_librivox/prince_01_machiavelli_64kb.mp3"
        ]),
        'genres' => json_encode(['Political Philosophy']),
        'color' => '#2F2F2F',
        'order' => 3,
        'is_active' => true,
    ],

    [
        'title' => 'The Divine Comedy – Purgatory',
        'author' => 'Dante Alighieri',
        'bookdesc' => 'Continuing Dante’s epic journey through the afterlife, this part explores the realm of Purgatory. Guided by Virgil, Dante ascends the terraces of purification toward spiritual redemption.',
        'imageurl' => 'https://media.librorabookofficial.win/thedivinecomedy.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/fegefeuer_1010_librivox/komoedie2_01_dante_64kb.mp3"
        ]),
        'genres' => json_encode(['Epic Poetry', 'Religious Literature']),
        'color' => '#4B2E2E',
        'order' => 4,
        'is_active' => true,
    ],

    [
        'title' => 'The Count of Monte Cristo',
        'author' => 'Alexandre Dumas',
        'bookdesc' => 'Wrongfully imprisoned, Edmond Dantès escapes and reinvents himself to seek justice. A gripping tale of betrayal, revenge, and redemption across Europe.',
        'imageurl' => 'https://media.librorabookofficial.win/thecountofmonte.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/count_monte_cristo_0711_librivox/count_of_monte_cristo_001_dumas_64kb.mp3"
        ]),
        'genres' => json_encode(['Adventure', 'Historical Fiction']),
        'color' => '#3C2F2F',
        'order' => 5,
        'is_active' => true,
    ],

    [
        'title' => 'Tao Teh King',
        'author' => 'Laozi',
        'bookdesc' => 'A foundational text of Taoist philosophy exploring harmony, simplicity, and the nature of existence. A timeless guide to living in balance with the Tao.',
        'imageurl' => 'https://media.librorabookofficial.win/taoteching.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/tao_teh_king_librivox/tao_teh_king_01-09_lao-tze_64kb.mp3"
        ]),
        'genres' => json_encode(['Philosophy', 'Spirituality']),
        'color' => '#244D3E',
        'order' => 6,
        'is_active' => true,
    ],

    [
        'title' => 'Siddhartha',
        'author' => 'Hermann Hesse',
        'bookdesc' => 'A profound journey of self-discovery and enlightenment. Follow Siddhartha as he seeks meaning, inner peace, and spiritual awakening.',
        'imageurl' => 'https://media.librorabookofficial.win/sidharta.png',
        'audiolinks' => json_encode([
            "http://www.archive.org/download/siddhartha_ap_librivox/siddhartha_01_hesse_64kb.mp3"
        ]),
        'genres' => json_encode(['Spiritual Fiction', 'Philosophy']),
        'color' => '#2E3F4F',
        'order' => 7,
        'is_active' => true,
    ],

];

        foreach ($trendingAudiobooks as $audiobook) {
            TrendingAudiobook::create($audiobook);
        }

        $this->command->info('5 trending audiobooks have been seeded successfully!');
    }
}
