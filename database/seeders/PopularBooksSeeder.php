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
                'title' => 'Hero Tales from American History',
                'author' => 'Lodge, Henry Cabot, 1850-1924',
                'bookdesc' => "Always visible content the stories of exemplary Americans who demonstrated exceptional valor and dedication to their ideals. Lodge and Roosevelt highlight the importance of remembering the contributions of these heroes, particularly for the nation's youth. The first chapter introduces George Washington, portraying him as the pivotal figure of the American Revolution, exemplifying leadership and integrity. Through anecdotes of Washington's exploits and character, the narrative emphasizes his impact on American independence and the foundational principles of the nation, setting the tone for the rest of the book, which will dive into the stories of other significant figures like Daniel Boone and George Rogers Clark. (This is an automatically generated summary.)",
                'imageurl' => 'https://media.librorabookofficial.win/pg1864.cover.medium.jpg',
                'bookurl' => 'https://media.librorabookofficial.win/1864.epub3.images.epub',
                'genres' => json_encode(['History', 'Biographies & Memoirs']),
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'The Tale of Benjamin Bunny',
                'author' => 'Potter, Beatrix, 1866-1943',
                'bookdesc' => "Always visible content Bunny finds his cousin Peter dressed in a red handkerchief, lamenting the loss of his clothing while they are both hiding from Mr. McGregor's cat. Together, they venture into the garden to recover Peter's coat and shoes, facing humorous challenges along the way. Their adventure becomes a battle of wits against the perilous cat and the intimidating Mr. McGregor. Ultimately, the story highlights the cleverness of Benjamin as he navigates the garden with a mix of courage and mischief, culminating in a rescue orchestrated by his father, Mr. Bunny, who drives the cat away and ensures the safe return of the two young rabbits home. (This is an automatically generated summary.)",
                'imageurl' => 'https://media.librorabookofficial.win/pg14407.cover.medium.jpg',
                'bookurl' => 'https://media.librorabookofficial.win/14407.epub3.images.epub',
                'genres' => json_encode(['Children', 'Adventure']),
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Life Is a Dream',
                'author' => 'Calderón de la Barca, Pedro, 1600-1681',
                'bookdesc' => "The opening of \"Life Is a Dream\" sets a dramatic tone, introducing Rosaura, a lady from Muscovy disguised as a man, along with her attendant Fife, who are both navigating a tumultuous landscape. Rosaura speaks with passion and determination about matters of revenge, hinting at a backstory steeped in vengeance. As they venture further into Poland, they encounter Segismund, who has recently been awakened from a deep sleep following an artistic and philosophical treatment of his troubled fate. Segismund's confusion upon awakening in a palace instead of the tower where he was imprisoned raises questions about identity, the nature of dreams versus reality, and human aspirations. This lays the groundwork for the exploration of whether life itself is merely a dream, posing questions that resonate throughout the play. (This is an automatically generated summary.)",
                'imageurl' => 'https://media.librorabookofficial.win/pg2587.cover.medium.jpg',
                'bookurl' => 'https://media.librorabookofficial.win/2587.epub3.images.epub',
                'genres' => json_encode(['Dramas & Plays', 'Philosophy']),
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Belgian Fairy Tales',
                'author' => 'Griffis, William Elliot, 1843-1928',
                'bookdesc' => "Always visible content to the vibrant landscape of Belgium, highlighting its diverse races and rich heritage. It centers on a young boy named Emile in the Ardennes region, who tends to his father's horses, particularly a colt named Baldwin. The narrative sets the stage for the tumultuous backdrop of World War I, as Emile prepares to join the fight for his country. Through a delicate combination of realism and fantasy, the beginning offers a glimpse into the joys of youth and the hardships of war, laying a foundation for the magical tales that follow. (This is an automatically generated summary.)",
                'imageurl' => 'https://media.librorabookofficial.win/pg67256.cover.medium.jpg',
                'bookurl' => 'https://media.librorabookofficial.win/67256.epub3.images.epub',
                'genres' => json_encode(['Fairytales']),
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Red shadows',
                'author' => 'Howard, Robert E. (Robert Ervin), 1906-1936',
                'bookdesc' => "Always visible content tales. The narrative follows Solomon Kane as he confronts various villains, particularly Le Loup, a cruel bandit leader who causes terror and death in the regions he plunders. The plot unfolds with intense action as Kane pursues Le Loup after the villain's men commit heinous acts against innocent people, culminating in a violent confrontation. The tension heightens as Kane navigates through treacherous jungles and encounters the supernatural, including resurrection and powerful ju-ju magic. Each story in this collection captures the dark, brooding mood characteristic of Howard's writing, emphasizing Kane's relentless pursuit of justice and the moral complexities of the world he inhabits. (This is an automatically generated summary.)",
                'imageurl' => 'https://media.librorabookofficial.win/pg70570.cover.medium.jpg',
                'bookurl' => 'https://media.librorabookofficial.win/70570.epub3.images.epub',
                'genres' => json_encode(['Fantasy']),
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($popularBooks as $book) {
            PopularBook::create($book);
        }

        $this->command->info('5 popular books have been seeded successfully!');
    }
}
