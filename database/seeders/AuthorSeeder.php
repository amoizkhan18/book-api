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

                'image' => 'https://media.librorabookofficial.win/william.png',

                'description' => 'English playwright, poet, and actor, widely regarded as the greatest writer in the English language',

                'color' => '#4A5568',

                'display_order' => 1,

                'is_active' => true,

            ],

            [

                'name' => 'Charles Dickens',

                'db_name' => 'Dickens, Charles, 1812-1870',

                'image' => 'https://media.librorabookofficial.win/charles.png',

                'description' => 'Victorian novelist who created some of the world\'s best-known fictional characters',

                'color' => '#4A5568',

                'display_order' => 2,

                'is_active' => true,

            ],

            [

                'name' => 'Mark Twain',

                'db_name' => 'Twain, Mark, 1835-1910',

                'image' => 'https://media.librorabookofficial.win/mark.png',

                'description' => 'American writer, humorist, and lecturer best known for The Adventures of Tom Sawyer',

                'color' => '#4A5568',

                'display_order' => 3,

                'is_active' => true,

            ],

            [

                'name' => 'Mary Shelley',

                'db_name' => 'Shelley, Mary Wollstonecraft, 1797-1851',

                'image' => 'https://media.librorabookofficial.win/mary.png',

                'description' => 'English novelist who wrote the Gothic novel Frankenstein',

                'color' => '#4A5568',

                'display_order' => 4,

                'is_active' => true,

            ],

            [

                'name' => 'Jane Austen',

                'db_name' => 'Austen, Jane, 1775-1817',

                'image' => 'https://media.librorabookofficial.win/jane.png',

                'description' => 'English novelist known for her six major novels including Pride and Prejudice',

                'color' => '#4A5568',

                'display_order' => 5,

                'is_active' => true,

            ],

            [

                'name' => 'Arthur Conan Doyle',

                'db_name' => 'Doyle, Arthur Conan, 1859-1930',

                'image' => 'https://media.librorabookofficial.win/arthur.png',

                'description' => 'British writer best known for his detective fiction featuring Sherlock Holmes',

                'color' => '#4A5568',

                'display_order' => 6,

                'is_active' => true,

            ],

            [

                'name' => 'Alexandre Dumas',

                'db_name' => 'Dumas, Alexandre, 1802-1870',

                'image' => 'https://media.librorabookofficial.win/alexandre.png',

                'description' => 'French writer best known for The Three Musketeers and The Count of Monte Cristo',

                'color' => '#4A5568',

                'display_order' => 7,

                'is_active' => true,

            ],
            
    [
        'name' => 'David Widger',
        'db_name' => 'David Widger',
        'image' => 'https://media.librorabookofficial.win/widger_david.png',
        'description' => 'Editor and compiler known for curating classic literature collections for Project Gutenberg.',
        'color' => '#4A5568',
        'display_order' => 8,
        'is_active' => true,
    ],
    [
        'name' => 'Robert Louis Stevenson',
        'db_name' => 'Robert Louis Stevenson',
        'image' => 'https://media.librorabookofficial.win/stevenson_robert_louis.png',
        'description' => 'Scottish novelist famous for adventure classics like Treasure Island and Dr Jekyll and Mr Hyde.',
        'color' => '#4A5568',
        'display_order' => 9,
        'is_active' => true,
    ],
    [
        'name' => 'Constance Garnett',
        'db_name' => 'Constance Garnett',
        'image' => 'https://media.librorabookofficial.win/garnett_constance.png',
        'description' => 'English translator who introduced many Russian literary classics to the English-speaking world.',
        'color' => '#4A5568',
        'display_order' => 10,
        'is_active' => true,
    ],
    [
        'name' => 'Fyodor Dostoyevsky',
        'db_name' => 'Fyodor Dostoyevsky',
        'image' => 'https://media.librorabookofficial.win/dostoyevsky_fyodor.png',
        'description' => 'Russian novelist known for psychological works like Crime and Punishment and The Brothers Karamazov.',
        'color' => '#4A5568',
        'display_order' => 11,
        'is_active' => true,
    ],
    [
        'name' => 'Jules Verne',
        'db_name' => 'Jules Verne',
        'image' => 'https://media.librorabookofficial.win/verne_jules.png',
        'description' => 'French author and pioneer of science fiction, known for Journey to the Center of the Earth.',
        'color' => '#4A5568',
        'display_order' => 12,
        'is_active' => true,
    ],
    [
        'name' => 'Oscar Wilde',
        'db_name' => 'Oscar Wilde',
        'image' => 'https://media.librorabookofficial.win/wilde_oscar.png',
        'description' => 'Irish playwright and poet celebrated for his wit and works like The Picture of Dorian Gray.',
        'color' => '#4A5568',
        'display_order' => 13,
        'is_active' => true,
    ],
    [
        'name' => 'H. G. Wells',
        'db_name' => 'H. G. Wells',
        'image' => 'https://media.librorabookofficial.win/wells_h_g.png',
        'description' => 'English writer known as a father of science fiction, author of The Time Machine and The War of the Worlds.',
        'color' => '#4A5568',
        'display_order' => 14,
        'is_active' => true,
    ],
    [
        'name' => 'Herman Melville',
        'db_name' => 'Herman Melville',
        'image' => 'https://media.librorabookofficial.win/melville_herman.png',
        'description' => 'American novelist best known for Moby-Dick, a masterpiece of maritime literature.',
        'color' => '#4A5568',
        'display_order' => 15,
        'is_active' => true,
    ],
    [
        'name' => 'Saint Augustine',
        'db_name' => 'Saint Augustine',
        'image' => 'https://media.librorabookofficial.win/augustine_of_hippo_saint.png',
        'description' => 'Early Christian theologian and philosopher whose works shaped Western Christianity.',
        'color' => '#4A5568',
        'display_order' => 16,
        'is_active' => true,
    ],
    [
        'name' => 'L. M. Montgomery',
        'db_name' => 'L. M. Montgomery',
        'image' => 'https://media.librorabookofficial.win/montgomery_l_m.png',
        'description' => 'Canadian author best known for the beloved Anne of Green Gables series.',
        'color' => '#4A5568',
        'display_order' => 17,
        'is_active' => true,
    ],
    [
        'name' => 'G. K. Chesterton',
        'db_name' => 'G. K. Chesterton',
        'image' => 'https://media.librorabookofficial.win/chesterton_g_k.png',
        'description' => 'English writer and critic known for Father Brown mysteries and philosophical essays.',
        'color' => '#4A5568',
        'display_order' => 18,
        'is_active' => true,
    ],
    [
        'name' => 'Friedrich Wilhelm Nietzsche',
        'db_name' => 'Friedrich Wilhelm Nietzsche',
        'image' => 'https://media.librorabookofficial.win/nietzsche_friedrich_wilhelm.png',
        'description' => 'German philosopher known for works like Thus Spoke Zarathustra and ideas on morality and power.',
        'color' => '#4A5568',
        'display_order' => 19,
        'is_active' => true,
    ],
    [
        'name' => 'Tobias Smollett',
        'db_name' => 'Tobias Smollett',
        'image' => 'https://media.librorabookofficial.win/smollett_t.png',
        'description' => 'Scottish novelist and poet known for satirical works and contributions to English literature.',
        'color' => '#4A5568',
        'display_order' => 20,
        'is_active' => true,
    ],
    [
        'name' => 'Andrew Lang',
        'db_name' => 'Andrew Lang',
        'image' => 'https://media.librorabookofficial.win/lang_andrew.png',
        'description' => 'Scottish writer and folklorist famous for his collections of fairy tales.',
        'color' => '#4A5568',
        'display_order' => 21,
        'is_active' => true,
    ],
    [
        'name' => 'L. Frank Baum',
        'db_name' => 'L. Frank Baum',
        'image' => 'https://media.librorabookofficial.win/baum_l_frank.png',
        'description' => 'American author best known for creating The Wonderful Wizard of Oz.',
        'color' => '#4A5568',
        'display_order' => 22,
        'is_active' => true,
    ],
    [
        'name' => 'Honoré de Balzac',
        'db_name' => 'Honoré de Balzac',
        'image' => 'https://media.librorabookofficial.win/balzac_honor_de.png',
        'description' => 'French novelist known for La Comédie Humaine, a vast series depicting French society.',
        'color' => '#4A5568',
        'display_order' => 23,
        'is_active' => true,
    ],
    [
        'name' => 'Auguste Maquet',
        'db_name' => 'Auguste Maquet',
        'image' => 'https://media.librorabookofficial.win/maquet_auguste.png',
        'description' => 'French writer known for collaborating with Alexandre Dumas on historical novels.',
        'color' => '#4A5568',
        'display_order' => 24,
        'is_active' => true,
    ],
    [
        'name' => 'Louisa May Alcott',
        'db_name' => 'Louisa May Alcott',
        'image' => 'https://media.librorabookofficial.win/alcott_louisa_may.png',
        'description' => 'American novelist best known for Little Women and her works on family life.',
        'color' => '#4A5568',
        'display_order' => 25,
        'is_active' => true,
    ],
    [
        'name' => 'Marcus Dods',
        'db_name' => 'Marcus Dods',
        'image' => 'https://media.librorabookofficial.win/dods_marcus.png',
        'description' => 'Scottish theologian and biblical scholar known for his religious writings.',
        'color' => '#4A5568',
        'display_order' => 26,
        'is_active' => true,
    ],
    [
        'name' => 'Leo Tolstoy',
        'db_name' => 'Leo Tolstoy',
        'image' => 'https://media.librorabookofficial.win/tolstoy_leo.png',
        'description' => 'Russian novelist and philosopher best known for War and Peace and Anna Karenina.',
        'color' => '#4A5568',
        'display_order' => 27,
        'is_active' => true,
    ],
    [
        'name' => 'Plato',
        'db_name' => 'Plato',
        'image' => 'https://media.librorabookofficial.win/plato.png',
        'description' => 'Ancient Greek philosopher and student of Socrates, foundational to Western philosophy.',
        'color' => '#4A5568',
        'display_order' => 28,
        'is_active' => true,
    ],
    [
        'name' => 'Walter Scott',
        'db_name' => 'Walter Scott',
        'image' => 'https://media.librorabookofficial.win/scott_walter.png',
        'description' => 'Scottish novelist and historian known for historical novels like Ivanhoe.',
        'color' => '#4A5568',
        'display_order' => 29,
        'is_active' => true,
    ],
    [
        'name' => 'Emily Brontë',
        'db_name' => 'Emily Brontë',
        'image' => 'https://media.librorabookofficial.win/bront_emily.png',
        'description' => 'English novelist and poet best known for Wuthering Heights.',
        'color' => '#4A5568',
        'display_order' => 30,
        'is_active' => true,
    ],
    [
        'name' => 'Lewis Carroll',
        'db_name' => 'Lewis Carroll',
        'image' => 'https://media.librorabookofficial.win/carroll_lewis.png',
        'description' => 'English writer and mathematician known for Alice’s Adventures in Wonderland.',
        'color' => '#4A5568',
        'display_order' => 31,
        'is_active' => true,
    ],
    [
        'name' => 'Gustave Doré',
        'db_name' => 'Gustave Doré',
        'image' => 'https://media.librorabookofficial.win/dor_gustave.png',
        'description' => 'French artist and illustrator renowned for his detailed engravings of literary works.',
        'color' => '#4A5568',
        'display_order' => 32,
        'is_active' => true,
    ],
    [
        'name' => 'Nathaniel Hawthorne',
        'db_name' => 'Nathaniel Hawthorne',
        'image' => 'https://media.librorabookofficial.win/hawthorne_nathaniel.png',
        'description' => 'American novelist known for The Scarlet Letter and dark romantic themes.',
        'color' => '#4A5568',
        'display_order' => 33,
        'is_active' => true,
    ],
    [
        'name' => 'Edward Bulwer-Lytton',
        'db_name' => 'Edward Bulwer-Lytton',
        'image' => 'https://media.librorabookofficial.win/lytton_edward_bulwer_lytton.png',
        'description' => 'English writer and politician known for historical novels and the phrase “It was a dark and stormy night.”',
        'color' => '#4A5568',
        'display_order' => 34,
        'is_active' => true,
    ],
    [
        'name' => 'Agatha Christie',
        'db_name' => 'Agatha Christie',
        'image' => 'https://media.librorabookofficial.win/christie_agatha.png',
        'description' => 'British mystery writer known for detective novels featuring Hercule Poirot and Miss Marple.',
        'color' => '#4A5568',
        'display_order' => 35,
        'is_active' => true,
    ],
    [
        'name' => 'Rudyard Kipling',
        'db_name' => 'Rudyard Kipling',
        'image' => 'https://media.librorabookofficial.win/kipling_rudyard.png',
        'description' => 'English author of The Jungle Book and the first English-language Nobel laureate in Literature.',
        'color' => '#4A5568',
        'display_order' => 36,
        'is_active' => true,
    ],
    [
        'name' => 'Edgar Allan Poe',
        'db_name' => 'Edgar Allan Poe',
        'image' => 'https://media.librorabookofficial.win/poe_edgar_allan.png',
        'description' => 'American writer known for gothic tales, poetry, and the invention of detective fiction.',
        'color' => '#4A5568',
        'display_order' => 37,
        'is_active' => true,
    ],
    [
        'name' => 'Jonathan Swift',
        'db_name' => 'Jonathan Swift',
        'image' => 'https://media.librorabookofficial.win/swift_jonathan.png',
        'description' => 'Irish satirist and author of Gulliver’s Travels, known for his sharp political commentary.',
        'color' => '#4A5568',
        'display_order' => 38,
        'is_active' => true,
    ],
    [
        'name' => 'Henry James',
        'db_name' => 'Henry James',
        'image' => 'https://media.librorabookofficial.win/james_henry.png',
        'description' => 'American-British author known for psychological novels and literary realism.',
        'color' => '#4A5568',
        'display_order' => 39,
        'is_active' => true,
    ],
    [
        'name' => 'Richard Francis Burton',
        'db_name' => 'Richard Francis Burton',
        'image' => 'https://media.librorabookofficial.win/burton_richard_francis.png',
        'description' => 'British explorer and translator known for his travels and translation of Arabian Nights.',
        'color' => '#4A5568',
        'display_order' => 40,
        'is_active' => true,
    ],
    [
        'name' => 'Edgar Rice Burroughs',
        'db_name' => 'Edgar Rice Burroughs',
        'image' => 'https://media.librorabookofficial.win/burroughs_edgar_rice.png',
        'description' => 'American author best known for creating Tarzan and adventure science fiction stories.',
        'color' => '#4A5568',
        'display_order' => 41,
        'is_active' => true,
    ],
    [
        'name' => 'Benjamin Jowett',
        'db_name' => 'Benjamin Jowett',
        'image' => 'https://media.librorabookofficial.win/jowett_benjamin.png',
        'description' => 'English scholar and translator known for his influential translations of Plato.',
        'color' => '#4A5568',
        'display_order' => 42,
        'is_active' => true,
    ],
    [
        'name' => 'Library of Congress Copyright Office',
        'db_name' => 'Library of Congress Copyright Office',
        'image' => 'https://media.librorabookofficial.win/library_of_congress_copyright_office.png',
        'description' => 'U.S. government office responsible for copyright registration and preservation of creative works.',
        'color' => '#4A5568',
        'display_order' => 43,
        'is_active' => true,
    ],
    [
        'name' => 'Jack London',
        'db_name' => 'Jack London',
        'image' => 'https://media.librorabookofficial.win/london_jack.png',
        'description' => 'American novelist known for adventure stories like The Call of the Wild.',
        'color' => '#4A5568',
        'display_order' => 44,
        'is_active' => true,
    ],
    [
        'name' => 'Aesop',
        'db_name' => 'Aesop',
        'image' => 'https://media.librorabookofficial.win/aesop.png',
        'description' => 'Ancient Greek storyteller credited with Aesop’s Fables, timeless moral tales.',
        'color' => '#4A5568',
        'display_order' => 45,
        'is_active' => true,
    ],
    [
        'name' => 'José Rizal',
        'db_name' => 'José Rizal',
        'image' => 'https://media.librorabookofficial.win/rizal_jos.png',
        'description' => 'Filipino nationalist, writer, and reformist known for Noli Me Tangere and El Filibusterismo.',
        'color' => '#4A5568',
        'display_order' => 46,
        'is_active' => true,
    ],
    [
        'name' => 'Victor Hugo',
        'db_name' => 'Victor Hugo',
        'image' => 'https://media.librorabookofficial.win/hugo_victor.png',
        'description' => 'French novelist and poet best known for Les Misérables and The Hunchback of Notre-Dame.',
        'color' => '#4A5568',
        'display_order' => 47,
        'is_active' => true,
    ],
    [
        'name' => 'George Eliot',
        'db_name' => 'George Eliot',
        'image' => 'https://media.librorabookofficial.win/eliot_george.png',
        'description' => 'English novelist Mary Ann Evans, known for works like Middlemarch and Silas Marner.',
        'color' => '#4A5568',
        'display_order' => 48,
        'is_active' => true,
    ],
    [
        'name' => 'Johann Wolfgang von Goethe',
        'db_name' => 'Johann Wolfgang von Goethe',
        'image' => 'https://media.librorabookofficial.win/goethe_johann_wolfgang_von.png',
        'description' => 'German writer and statesman best known for Faust and contributions to world literature.',
        'color' => '#4A5568',
        'display_order' => 49,
        'is_active' => true,
    ],
    [
        'name' => 'Henrik Ibsen',
        'db_name' => 'Henrik Ibsen',
        'image' => 'https://media.librorabookofficial.win/ibsen_henrik.png',
        'description' => 'Norwegian playwright considered a pioneer of modern drama, known for A Doll’s House.',
        'color' => '#4A5568',
        'display_order' => 50,
        'is_active' => true,
    ],
    [
        'name' => 'Joseph Conrad',
        'db_name' => 'Joseph Conrad',
        'image' => 'https://media.librorabookofficial.win/conrad_joseph.png',
        'description' => 'Polish-British novelist known for Heart of Darkness and maritime fiction.',
        'color' => '#4A5568',
        'display_order' => 51,
        'is_active' => true,
    ],
    [
        'name' => 'Dante Alighieri',
        'db_name' => 'Dante Alighieri',
        'image' => 'https://media.librorabookofficial.win/dante_alighieri.png',
        'description' => 'Italian poet of the Middle Ages, best known for The Divine Comedy.',
        'color' => '#4A5568',
        'display_order' => 52,
        'is_active' => true,
    ],
    [
        'name' => 'E. M. Forster',
        'db_name' => 'E. M. Forster',
        'image' => 'https://media.librorabookofficial.win/forster_e_m.png',
        'description' => 'English novelist known for A Passage to India and works exploring social themes.',
        'color' => '#4A5568',
        'display_order' => 53,
        'is_active' => true,
    ],
    [
        'name' => 'Gilbert Parker',
        'db_name' => 'Gilbert Parker',
        'image' => 'https://media.librorabookofficial.win/parker_gilbert.png',
        'description' => 'Canadian novelist and politician known for historical fiction set in Canada and England.',
        'color' => '#4A5568',
        'display_order' => 54,
        'is_active' => true,
    ],
    [
        'name' => 'Robert W. Chambers',
        'db_name' => 'Robert W. Chambers',
        'image' => 'https://media.librorabookofficial.win/chambers_robert_w.png',
        'description' => 'American author known for The King in Yellow and early weird fiction.',
        'color' => '#4A5568',
        'display_order' => 55,
        'is_active' => true,
    ],
    [
        'name' => 'Homer',
        'db_name' => 'Homer',
        'image' => 'https://media.librorabookofficial.win/homer.png',
        'description' => 'Ancient Greek poet traditionally credited with composing The Iliad and The Odyssey.',
        'color' => '#4A5568',
        'display_order' => 56,
        'is_active' => true,
    ],
    [
        'name' => 'Miguel de Cervantes',
        'db_name' => 'Miguel de Cervantes',
        'image' => 'https://media.librorabookofficial.win/cervantes_saavedra_miguel_de.png',
        'description' => 'Spanish writer best known for Don Quixote, one of the greatest novels ever written.',
        'color' => '#4A5568',
        'display_order' => 57,
        'is_active' => true,
    ],
    [
        'name' => 'Charles Darwin',
        'db_name' => 'Charles Darwin',
        'image' => 'https://media.librorabookofficial.win/darwin_charles.png',
        'description' => 'English naturalist who developed the theory of evolution by natural selection.',
        'color' => '#4A5568',
        'display_order' => 58,
        'is_active' => true,
    ],
    [
        'name' => 'Thomas Hardy',
        'db_name' => 'Thomas Hardy',
        'image' => 'https://media.librorabookofficial.win/hardy_thomas.png',
        'description' => 'English novelist and poet known for Tess of the d’Urbervilles and Jude the Obscure.',
        'color' => '#4A5568',
        'display_order' => 59,
        'is_active' => true,
    ],
    [
        'name' => 'Anthony Trollope',
        'db_name' => 'Anthony Trollope',
        'image' => 'https://media.librorabookofficial.win/trollope_anthony.png',
        'description' => 'English novelist known for his detailed portrayals of Victorian society.',
        'color' => '#4A5568',
        'display_order' => 60,
        'is_active' => true,
    ],
    [
        'name' => 'Charlotte Brontë',
        'db_name' => 'Charlotte Brontë',
        'image' => 'https://media.librorabookofficial.win/bront_charlotte.png',
        'description' => 'English novelist best known for Jane Eyre and contributions to Victorian literature.',
        'color' => '#4A5568',
        'display_order' => 61,
        'is_active' => true,
    ],
    [
        'name' => 'Frank T. Merrill',
        'db_name' => 'Frank T. Merrill',
        'image' => 'https://media.librorabookofficial.win/merrill_frank_t.png',
        'description' => 'American illustrator known for his detailed artwork accompanying classic literature.',
        'color' => '#4A5568',
        'display_order' => 62,
        'is_active' => true,
    ],
    [
        'name' => 'Guy de Maupassant',
        'db_name' => 'Guy de Maupassant',
        'image' => 'https://media.librorabookofficial.win/maupassant_guy_de.png',
        'description' => 'French writer known for short stories exploring human nature and society.',
        'color' => '#4A5568',
        'display_order' => 63,
        'is_active' => true,
    ],
    [
        'name' => 'F. Scott Fitzgerald',
        'db_name' => 'F. Scott Fitzgerald',
        'image' => 'https://media.librorabookofficial.win/fitzgerald_f_scott.png',
        'description' => 'American novelist known for The Great Gatsby and depictions of the Jazz Age.',
        'color' => '#4A5568',
        'display_order' => 64,
        'is_active' => true,
    ],
    [
        'name' => 'William Dean Howells',
        'db_name' => 'William Dean Howells',
        'image' => 'https://media.librorabookofficial.win/howells_william_dean.png',
        'description' => 'American realist author and critic who influenced literary realism in the United States.',
        'color' => '#4A5568',
        'display_order' => 65,
        'is_active' => true,
    ],
    [
        'name' => 'Daniel Defoe',
        'db_name' => 'Daniel Defoe',
        'image' => 'https://media.librorabookofficial.win/defoe_daniel.png',
        'description' => 'English writer best known for Robinson Crusoe, one of the earliest English novels.',
        'color' => '#4A5568',
        'display_order' => 66,
        'is_active' => true,
    ],
    [
        'name' => 'Wilhelm Grimm',
        'db_name' => 'Wilhelm Grimm',
        'image' => 'https://media.librorabookofficial.win/grimm_wilhelm.png',
        'description' => 'German folklorist who, with his brother Jacob, collected and published famous fairy tales.',
        'color' => '#4A5568',
        'display_order' => 67,
        'is_active' => true,
    ],
    [
        'name' => 'Jacob Grimm',
        'db_name' => 'Jacob Grimm',
        'image' => 'https://media.librorabookofficial.win/grimm_jacob.png',
        'description' => 'German scholar and folklorist known for the Grimm Brothers’ fairy tales.',
        'color' => '#4A5568',
        'display_order' => 68,
        'is_active' => true,
    ],
    [
        'name' => 'Charles Dudley Warner',
        'db_name' => 'Charles Dudley Warner',
        'image' => 'https://media.librorabookofficial.win/warner_charles_dudley.png',
        'description' => 'American essayist and novelist known for his collaboration with Mark Twain.',
        'color' => '#4A5568',
        'display_order' => 69,
        'is_active' => true,
    ],
    [
        'name' => 'Henry Morley',
        'db_name' => 'Henry Morley',
        'image' => 'https://media.librorabookofficial.win/morley_henry.png',
        'description' => 'English writer and professor known for popularizing English literature studies.',
        'color' => '#4A5568',
        'display_order' => 70,
        'is_active' => true,
    ],
    [
        'name' => 'Anton Pavlovich Chekhov',
        'db_name' => 'Anton Pavlovich Chekhov',
        'image' => 'https://media.librorabookofficial.win/chekhov_anton_pavlovich.png',
        'description' => 'Russian playwright and short story writer, a master of modern drama and realism.',
        'color' => '#4A5568',
        'display_order' => 71,
        'is_active' => true,
    ],
    [
        'name' => 'P. G. Wodehouse',
        'db_name' => 'P. G. Wodehouse',
        'image' => 'https://media.librorabookofficial.win/wodehouse_p_g.png',
        'description' => 'English humorist known for the Jeeves and Wooster series of comic novels.',
        'color' => '#4A5568',
        'display_order' => 72,
        'is_active' => true,
    ],
    [
        'name' => 'Frances Hodgson Burnett',
        'db_name' => 'Frances Hodgson Burnett',
        'image' => 'https://media.librorabookofficial.win/burnett_frances_hodgson.png',
        'description' => 'British-American author known for The Secret Garden and Little Lord Fauntleroy.',
        'color' => '#4A5568',
        'display_order' => 73,
        'is_active' => true,
    ],
    [
        'name' => 'George Bell',
        'db_name' => 'George Bell',
        'image' => 'https://media.librorabookofficial.win/bell_george.png',
        'description' => 'Publisher and editor associated with classic literary works and educational publications.',
        'color' => '#4A5568',
        'display_order' => 74,
        'is_active' => true,
    ],
    [
        'name' => 'Elizabeth Cleghorn Gaskell',
        'db_name' => 'Elizabeth Cleghorn Gaskell',
        'image' => 'https://media.librorabookofficial.win/gaskell_elizabeth_cleghorn.png',
        'description' => 'English novelist known for depicting industrial society in works like North and South.',
        'color' => '#4A5568',
        'display_order' => 75,
        'is_active' => true,
    ],
    [
        'name' => 'Voltaire',
        'db_name' => 'Voltaire',
        'image' => 'https://media.librorabookofficial.win/voltaire.png',
        'description' => 'French Enlightenment writer and philosopher known for satire and advocacy of civil liberties.',
        'color' => '#4A5568',
        'display_order' => 76,
        'is_active' => true,
    ],
    [
        'name' => 'George Meredith',
        'db_name' => 'George Meredith',
        'image' => 'https://media.librorabookofficial.win/meredith_george.png',
        'description' => 'English novelist and poet known for his complex characters and literary style.',
        'color' => '#4A5568',
        'display_order' => 77,
        'is_active' => true,
    ],
    [
        'name' => 'Bram Stoker',
        'db_name' => 'Bram Stoker',
        'image' => 'https://media.librorabookofficial.win/stoker_bram.png',
        'description' => 'Irish author best known for Dracula, a cornerstone of gothic horror fiction.',
        'color' => '#4A5568',
        'display_order' => 78,
        'is_active' => true,
    ],
    [
        'name' => 'Georg Ebers',
        'db_name' => 'Georg Ebers',
        'image' => 'https://media.librorabookofficial.win/ebers_georg.png',
        'description' => 'German novelist and Egyptologist known for historical novels set in ancient Egypt.',
        'color' => '#4A5568',
        'display_order' => 79,
        'is_active' => true,
    ],
    [
        'name' => 'Washington Irving',
        'db_name' => 'Washington Irving',
        'image' => 'https://media.librorabookofficial.win/irving_washington.png',
        'description' => 'American author known for The Legend of Sleepy Hollow and Rip Van Winkle.',
        'color' => '#4A5568',
        'display_order' => 80,
        'is_active' => true,
    ],
    [
        'name' => 'James Alexander Robertson',
        'db_name' => 'James Alexander Robertson',
        'image' => 'https://media.librorabookofficial.win/robertson_james_alexander.png',
        'description' => 'American historian known for works on Philippine history and colonial documents.',
        'color' => '#4A5568',
        'display_order' => 81,
        'is_active' => true,
    ],
    [
        'name' => 'M. R. James',
        'db_name' => 'M. R. James',
        'image' => 'https://media.librorabookofficial.win/j_kai_m_r.png',
        'description' => 'English scholar and writer known for his classic ghost stories.',
        'color' => '#4A5568',
        'display_order' => 82,
        'is_active' => true,
    ],
    [
        'name' => 'William Henry Giles Kingston',
        'db_name' => 'William Henry Giles Kingston',
        'image' => 'https://media.librorabookofficial.win/kingston_william_henry_giles.png',
        'description' => 'English writer known for adventure stories for young readers.',
        'color' => '#4A5568',
        'display_order' => 83,
        'is_active' => true,
    ],
    [
        'name' => 'Robert Chambers',
        'db_name' => 'Robert Chambers',
        'image' => 'https://media.librorabookofficial.win/chambers_robert.png',
        'description' => 'Scottish publisher and author known for educational and historical works.',
        'color' => '#4A5568',
        'display_order' => 84,
        'is_active' => true,
    ],
    [
        'name' => 'G. A. Henty',
        'db_name' => 'G. A. Henty',
        'image' => 'https://media.librorabookofficial.win/henty_g_a.png',
        'description' => 'English writer of historical adventure novels, especially for young readers.',
        'color' => '#4A5568',
        'display_order' => 85,
        'is_active' => true,
    ],
    [
        'name' => 'Edith Wharton',
        'db_name' => 'Edith Wharton',
        'image' => 'https://media.librorabookofficial.win/wharton_edith.png',
        'description' => 'American novelist known for The Age of Innocence and portrayals of high society.',
        'color' => '#4A5568',
        'display_order' => 86,
        'is_active' => true,
    ],
    [
        'name' => 'John Ruskin',
        'db_name' => 'John Ruskin',
        'image' => 'https://media.librorabookofficial.win/ruskin_john.png',
        'description' => 'English art critic and social thinker who influenced Victorian art and architecture.',
        'color' => '#4A5568',
        'display_order' => 87,
        'is_active' => true,
    ],
    [
        'name' => 'Émile Zola',
        'db_name' => 'Émile Zola',
        'image' => 'https://media.librorabookofficial.win/zola_mile.png',
        'description' => 'French novelist and journalist known for naturalism and works like Germinal.',
        'color' => '#4A5568',
        'display_order' => 88,
        'is_active' => true,
    ],
    [
        'name' => 'Horatio Alger Jr.',
        'db_name' => 'Horatio Alger Jr.',
        'image' => 'https://media.librorabookofficial.win/alger_horatio_jr.png',
        'description' => 'American writer known for rags-to-riches stories inspiring success and perseverance.',
        'color' => '#4A5568',
        'display_order' => 89,
        'is_active' => true,
    ],
    [
        'name' => 'George Manville Fenn',
        'db_name' => 'George Manville Fenn',
        'image' => 'https://media.librorabookofficial.win/fenn_george_manville.png',
        'description' => 'English author known for adventure stories and works for young readers.',
        'color' => '#4A5568',
        'display_order' => 90,
        'is_active' => true,
    ],
    [
        'name' => 'Vernon S. Jones',
        'db_name' => 'Vernon S. Jones',
        'image' => 'https://media.librorabookofficial.win/vernon_jones_v_s.png',
        'description' => 'Translator and editor known for adapting classic tales for modern audiences.',
        'color' => '#4A5568',
        'display_order' => 91,
        'is_active' => true,
    ],
    [
        'name' => 'Clara Bell',
        'db_name' => 'Clara Bell',
        'image' => 'https://media.librorabookofficial.win/bell_clara.png',
        'description' => 'Translator known for bringing European literary works to English readers.',
        'color' => '#4A5568',
        'display_order' => 92,
        'is_active' => true,
    ],
    [
        'name' => 'H. Rider Haggard',
        'db_name' => 'H. Rider Haggard',
        'image' => 'https://media.librorabookofficial.win/haggard_h_rider.png',
        'description' => 'English writer known for adventure novels like King Solomon’s Mines.',
        'color' => '#4A5568',
        'display_order' => 93,
        'is_active' => true,
    ],
    [
        'name' => 'George MacDonald',
        'db_name' => 'George MacDonald',
        'image' => 'https://media.librorabookofficial.win/macdonald_george.png',
        'description' => 'Scottish author and poet known for fantasy works influencing C. S. Lewis.',
        'color' => '#4A5568',
        'display_order' => 94,
        'is_active' => true,
    ],
    [
        'name' => 'Bernard Shaw',
        'db_name' => 'Bernard Shaw',
        'image' => 'https://media.librorabookofficial.win/shaw_bernard.png',
        'description' => 'Irish playwright and critic known for works like Pygmalion and sharp social commentary.',
        'color' => '#4A5568',
        'display_order' => 95,
        'is_active' => true,
    ],
    [
        'name' => 'Charlotte M. Yonge',
        'db_name' => 'Charlotte M. Yonge',
        'image' => 'https://media.librorabookofficial.win/yonge_charlotte_m.png',
        'description' => 'English novelist known for religious and historical fiction for young readers.',
        'color' => '#4A5568',
        'display_order' => 96,
        'is_active' => true,
    ],
    [
        'name' => 'F. H. Townsend',
        'db_name' => 'F. H. Townsend',
        'image' => 'https://media.librorabookofficial.win/townsend_f_h.png',
        'description' => 'British illustrator known for his artwork in classic literature publications.',
        'color' => '#4A5568',
        'display_order' => 97,
        'is_active' => true,
    ],
    [
        'name' => 'Emma Helen Blair',
        'db_name' => 'Emma Helen Blair',
        'image' => 'https://media.librorabookofficial.win/blair_emma_helen.png',
        'description' => 'American historian and editor known for documenting Philippine historical records.',
        'color' => '#4A5568',
        'display_order' => 98,
        'is_active' => true,
    ],
    [
        'name' => 'Oscar Levy',
        'db_name' => 'Oscar Levy',
        'image' => 'https://media.librorabookofficial.win/levy_oscar.png',
        'description' => 'German writer and translator known for translating Nietzsche’s works into English.',
        'color' => '#4A5568',
        'display_order' => 99,
        'is_active' => true,
    ],
    [
        'name' => 'Henry B. Wheatley',
        'db_name' => 'Henry B. Wheatley',
        'image' => 'https://media.librorabookofficial.win/wheatley_henry_b.png',
        'description' => 'English author and editor known for literary research and historical writings.',
        'color' => '#4A5568',
        'display_order' => 100,
        'is_active' => true,
    ],

        ];

        foreach ($authors as $author) {

            Author::create($author);

        }

        $this->command->info('7 authors have been seeded successfully!');

    }

}
