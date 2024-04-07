<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Musicstore;

class MusicstoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $musicstore = collect(
            [
                
                [
                    'album_title' => 'In Rainbows',
                    'album_date' => '2007-10-10',
                    'album_image' => 'Images/album-covers/In Rainbows.jpg',
                    
                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'In Rainbows is the seventh studio album by the English rock band Radiohead. It was self-released on 10 October 2007 as a pay-what-you-want download, followed by a physical release internationally by XL Recordings in December 2007 and in the United States on 1 January 2008 by TBD Records. It was Radiohead\'s first release after their recording contract with EMI ended with their previous album Hail to the Thief (2003).'
                ],
                [
                    'album_title' => 'OK Computer',
                    'album_date' => '1997-05-21',
                    'album_image' => 'Images/album-covers/OK Computer.jpg',
                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'OK Computer is the third studio album by the English rock band Radiohead, released on 21 May 1997 on EMI subsidiaries Parlophone and Capitol Records. The members of Radiohead self-produced the album with Nigel Godrich, an arrangement they have used for their subsequent albums. Other than the song "Lucky", which was recorded in 1995, Radiohead recorded the album in Oxfordshire and Bath between 1996 and early 1997, mostly in the historic mansion St Catherine\'s Court.'

                ],
                [
                    'album_title' => 'The Bends',
                    'album_date' => '1995-03-13',
                    'album_image' => 'Images/album-covers/The Bends.jpg',
                    
                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'The Bends is the second studio album by the English rock band Radiohead, released on 13 March 1995 by Parlophone. It was produced by John Leckie, and engineered by Nigel Godrich, who has produced all of Radiohead\'s subsequent studio albums. It was the first Radiohead album with cover art by Stanley Donwood, who, with singer Thom Yorke, has produced all of Radiohead\'s artwork since.'
                ],
                [
                    'album_title' => 'Kid A',
                    'album_date' => '2000-10-02',
                    'album_image' => 'Images/album-covers/Kid_A.png',
                    
                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'Kid A is the fourth studio album by the English rock band Radiohead, released on 2 October 2000 by Parlophone. After the stress of promoting Radiohead\'s acclaimed 1997 album OK Computer, songwriter Thom Yorke envisioned a radical change in direction. The band incorporated synthesisers, drum machines, strings and brass, drawing influence from electronic music, ambient music, krautrock, jazz, and 20th-century classical music.'
                ],
                [
                    'album_title' => 'A Moon Shaped Pool',
                    'album_date' => '2016-05-08',
                    'album_image' => 'Images/album-covers/A_Moon_ShapedPool.png',

                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'A Moon Shaped Pool is the ninth studio album by the English rock band Radiohead. It was released digitally on 8 May 2016, with CD and vinyl releases in June 2016 through XL Recordings. Radiohead developed the album in southern France with producer Nigel Godrich. It includes several songs written and performed some years earlier, including "True Love Waits", a fan favourite since 1995.'
                ],
                [
                    'album_title' => 'Pablo Honey',
                    'album_date' => '1993-02-22',
                    'album_image' => 'Images/album-covers/Pablo_Honey.png',

                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'Pablo Honey is the debut studio album by the English rock band Radiohead, released on 22 February 1993 by Parlophone. The album was produced by Sean Slade and Paul Q. Kolderie and was recorded at Chipping Norton Recording Studios and Courtyard Studio, Oxfordshire. It features three charting singles: "Anyone Can Play Guitar", "Stop Whispering", and perhaps the band\'s most well-known hit on mainstream radio, "Creep".'

                ],
                [
                    'album_title' => 'Amnesiac',
                    'album_date' => '2001-06-05',
                    'album_image' => 'Images/album-covers/Amnesiac.png',

                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'Amnesiac is the fifth studio album by the English rock band Radiohead, released in June 2001 by Parlophone. Recorded with producer Nigel Godrich alongside Radiohead\'s previous album Kid A (2000), Amnesiac incorporates similar influences of electronic music, 20th-century classical music, jazz, and krautrock. Its lyrics and artwork explore themes of memory and reincarnation, inspired by Yorke\'s fascination with Sufism and the recurring dreams he had during recording.'
                ],
                [
                    'album_title' => 'Hail to the Thief',
                    'album_date' => '2003-06-09',
                    'album_image' => 'Images/album-covers/Hail_to_TheThief.png',

                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'Hail to the Thief is the sixth studio album by the English rock band Radiohead. It was released on 9 June 2003 by Parlophone in the UK and a day later by Capitol Records in the United States. It was the last album released under Radiohead\'s record contract with EMI, parent company of Parlophone and Capitol.'
                ],
                [
                    'album_title' => 'The King of Limbs',
                    'album_date' => '2011-02-18',
                    'album_image' => 'Images/album-covers/The_King_ofLambs.png',

                    'album_price' => '$19.99',
                    'album_genre' => 'Alternative Rock',
                    'album_description' => 'The King of Limbs is the eighth studio album by the English rock band Radiohead. It was self-released on 18 February 2011 as a download, followed by physical CD and 12" vinyl releases on 28 March, a wider digital release via AWAL, and a special "newspaper" edition on 9 May 2011. The physical editions were released through the band\'s Ticker Tape imprint on XL in the United Kingdom, TBD in the United States, and Hostess Entertainment in Japan.'
                ]
            ]

        );

        $musicstore->each(function ($musicstore) {
            Musicstore::create($musicstore);
        });
    }
}
