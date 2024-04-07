<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // tour::factory(10)->create();

        $tour = collect(
            [
                [
                    'tour_title' => 'The Phantom of the Opera',
                    'tour_description' => 'The Phantom of the Opera is a musical with music by Andrew Lloyd Webber, lyrics by Charles Hart, and a book by Lloyd Webber and Richard Stilgoe. Based on the 1910 French novel Le Fantôme de l\'Opéra by Gaston Leroux, its central plot revolves around a beautiful soprano, Christine Daaé, who becomes the obsession of a mysterious, disfigured musical genius living in the subterranean labyrinth beneath the Paris Opéra House.',
                    'tour_image' => 'phantom.jpg',
                    'ticket_price' => '100',
                    'tour_date' => '2024-04-07',
                    'location' => 'Paris',
                    'theatre' => 'Paris Opera House'

                ],
                [
                    'tour_title' => 'Les Misérables',
                    'tour_description' => 'Les Misérables is a sung-through musical based on the 1862 novel of the same name by Victor Hugo. Set in early 19th-century France, it follows the stories of various characters as they struggle for redemption and revolution.',
                    'tour_image' => 'les_mis.jpg',
                    'ticket_price' => '120',
                    'tour_date' => '2024-05-15',
                    'location' => 'London',
                    'theatre' => 'Queen\'s Theatre'



                ],
                [
                    'tour_title' => 'Wicked',
                    'tour_description' => 'Wicked is a Broadway musical with music and lyrics by Stephen Schwartz and a book by Winnie Holzman. It is based on the 1995 Gregory Maguire novel Wicked: The Life and Times of the Wicked Witch of the West, an alternative telling of the 1939 film The Wizard of Oz and L. Frank Baum\'s classic 1900 novel, The Wonderful Wizard of Oz.',
                    'tour_image' => 'wicked.jpg',
                    'ticket_price' => '90',
                    'tour_date' => '2024-06-20',
                    'location' => 'New York City',
                    'theatre' => 'Gershwin Theatre'

                ],
                [
                    'tour_title' => 'Hamilton',
                    'tour_description' => 'Hamilton is a musical with music, lyrics, and book by Lin-Manuel Miranda. It tells the story of American Founding Father Alexander Hamilton through music inspired by hip hop, R&B, pop, soul, and traditional-style show tunes.',
                    'tour_image' => 'hamilton.jpg',
                    'ticket_price' => '150',
                    'tour_date' => '2024-07-10',
                    'location' => 'Chicago',
                    'theatre' => 'CIBC Theatre'

                ],
                [
                    'tour_title' => 'The Lion King',
                    'tour_description' => 'The Lion King is a musical based on the 1994 Walt Disney Animation Studios\' animated feature film of the same name with music by Elton John, lyrics by Tim Rice, and book by Roger Allers and Irene Mecchi, along with additional music and lyrics by Lebo M, Mark Mancina, Jay Rifkin, Julie Taymor, and Hans Zimmer.',
                    'tour_image' => 'lion_king.jpg',
                    'ticket_price' => '110',
                    'tour_date' => '2024-08-05',
                    'location' => 'Los Angeles',
                    'theatre' => 'Pantages Theatre'

                ],
                [
                    'tour_title' => 'Chicago',
                    'tour_description' => 'Chicago is a musical with music by John Kander, lyrics by Fred Ebb, and a book by Ebb and Bob Fosse. Set in Chicago in the jazz age, the musical is based on a 1926 play of the same name by reporter Maurine Dallas Watkins, about actual criminals and the crimes on which she reported.',
                    'tour_image' => 'chicago.jpg',
                    'ticket_price' => '95',
                    'tour_date' => '2024-09-12',
                    'location' => 'Boston',
                    'theatre' => 'Boston Opera House'

                ],
                [
                    'tour_title' => 'Mamma Mia!',
                    'tour_description' => 'Mamma Mia! is a jukebox musical written by British playwright Catherine Johnson, based on the songs of ABBA composed by Benny Andersson and Björn Ulvaeus, former members of the band. The title of the musical is taken from the group\'s 1975 chart-topper "Mamma Mia".',
                    'tour_image' => 'mamma_mia.jpg',
                    'ticket_price' => '80',
                    'tour_date' => '2024-10-20',
                    'location' => 'Las Vegas',
                    'theatre' => 'The Venetian Theatre'

                ],
                [
                    'tour_title' => 'Cats',
                    'tour_description' => 'Cats is a sung-through musical composed by Andrew Lloyd Webber, based on the 1939 poetry collection Old Possum\'s Book of Practical Cats by T. S. Eliot. The musical tells the story of a tribe of cats called the Jellicles and the night they make the "Jellicle choice", deciding which cat will ascend to the Heaviside Layer and come back to a new life.',
                    'tour_image' => 'cats.jpg',
                    'ticket_price' => '95',
                    'tour_date' => '2024-11-05',
                    'location' => 'Sydney',
                    'theatre' => 'Capitol Theatre'

                ],
                [
                    'tour_title' => 'Dear Evan Hansen',
                    'tour_description' => 'Dear Evan Hansen is a musical with music and lyrics by Benj Pasek and Justin Paul, and book by Steven Levenson. It tells the story of Evan Hansen, a high school senior with social anxiety disorder and his journey of self-discovery and acceptance following the suicide of a classmate.',
                    'tour_image' => 'dear_evan_hansen.jpg',
                    'ticket_price' => '110',
                    'tour_date' => '2024-12-15',
                    'location' => 'Toronto',
                    'theatre' => 'Royal Alexandra Theatre'

                ],
                [
                    'tour_title' => 'The Sound of Music',
                    'tour_description' => 'The Sound of Music is a musical with music by Richard Rodgers, lyrics by Oscar Hammerstein II, and a book by Howard Lindsay and Russel Crouse. It is based on the 1949 memoir of Maria von Trapp, The Story of the Trapp Family Singers, and the 1965 film adaptation starring Julie Andrews.',
                    'tour_image' => 'sound_of_music.jpg',
                    'ticket_price' => '85',
                    'tour_date' => '2025-02-20',
                    'location' => 'Seattle',
                    'theatre' => 'Paramount Theatre'

                ],
                [
                    'tour_title' => 'Aladdin',
                    'tour_description' => 'Aladdin is a Broadway musical based on the 1992 Disney animated film of the same name with music by Alan Menken and lyrics by Howard Ashman, Tim Rice, and Chad Beguelin. The story follows a street-smart young man who discovers a magical lamp and embarks on a journey to win the heart of Princess Jasmine and defeat the evil sorcerer Jafar.',
                    'tour_image' => 'aladdin.jpg',
                    'ticket_price' => '100',
                    'tour_date' => '2025-01-10',
                    'location' => 'Miami',
                    'theatre' => 'Adrienne Arsht Center'


                ]





            ]

        );


        $tour->each(function ($tour) {
            Tour::create($tour);
        });

        // tour::create([
        //     'tour_title' => 'The Phantom of the Opera',
        //     'tour_description' => 'The Phantom of the Opera is a musical with music by Andrew Lloyd Webber, lyrics by Charles Hart, and a book by Lloyd Webber and Richard Stilgoe. Based on the 1910 French novel Le Fantôme de l\'Opéra by Gaston Leroux, its central plot revolves around a beautiful soprano, Christine Daaé, who becomes the obsession of a mysterious, disfigured musical genius living in the subterranean labyrinth beneath the Paris Opéra House.',
        //     'tour_image' => 'phantom.jpg',
        //     'ticket_price' => '100',
        //     'tour_date' => '2024-04-07',
        //     'location' => 'Paris',
        //     'theatre' => 'Paris Opera House'
        // ]);
    }
}
