<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Songs;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $songs = collect([
            [
                'song_name' => '15 Step',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:58',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Bodysnatchers',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:02',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Nude',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:15',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Weird Fishes/Arpeggi',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:18',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'All I Need',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:49',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Faust Arp',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:09',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Reckoner',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:50',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'House of Cards',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:28',
                'musicstore_id' => 1
            ],

            [
                'song_name' => 'Jigsaw Falling into Place',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:09',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Videotape',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:42',
                'musicstore_id' => 1
            ],
            [
                'song_name' => 'Airbag',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:44',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Paranoid Android',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '6:23',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Subterranean Homesick Alien',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:27',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Exit Music (For a Film)',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:24',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Let Down',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:59',
                'musicstore_id' => 2
            ],

            [
                'song_name' => 'Karma Police',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:21',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Fitter Happier',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '1:57',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Electioneering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:50',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Climbing Up the Walls',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:45',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'No Surprises',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:48',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Lucky',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:19',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'The Tourist',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:24',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'Planet Telex',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:18',
                'musicstore_id' => 2
            ],
            [
                'song_name' => 'The Bends',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:06',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'High and Dry',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:17',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Fake Plastic Trees',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:50',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Bones',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:09',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Nice Dream',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:53',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Just',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:54',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'My Iron Lung',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:36',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Bullet Proof..I Wish I Was',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:28',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Black Star',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:07',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Sulk',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:42',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Street Spirit (Fade Out)',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:12',
                'musicstore_id' => 3
            ],
            [
                'song_name' => 'Everything in Its Right Place',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:11',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Kid A',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:44',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'The National Anthem',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:51',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'How to Disappear Completely',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:56',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Treefingers',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:42',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Optimistic',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:16',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'In Limbo',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:31',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Idioteque',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:09',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Morning Bell',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:35',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Motion Picture Soundtrack',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '7:01',
                'musicstore_id' => 4
            ],
            [
                'song_name' => 'Burn the Witch',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:40',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Daydreaming',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '6:24',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Decks Dark',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:41',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Desert Island Disk',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:44',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Ful Stop',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '6:07',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Glass Eyes',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:52',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Identikit',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:26',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'The Numbers',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:45',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Present Tense',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:06',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Tinker Tailor Soldier Sailor',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:03',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'True Love Waits',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:43',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:29',
                'musicstore_id' => 5
            ],
            [
                'song_name' => 'Creep',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:56',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Stop Whispering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:26',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Thinking About You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:41',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Ripcord',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:10',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Vegetable',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Prove Yourself',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:25',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'I Can\'t',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Lurgee',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:08',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Blow Out',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:01',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:29',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Creep',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:56',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Stop Whispering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:26',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Thinking About You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:41',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Ripcord',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:10',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Vegetable',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Prove Yourself',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:25',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'I Can\'t',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Lurgee',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:08',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Blow Out',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:01',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:29',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Creep',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:56',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Stop Whispering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:26',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Thinking About You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:41',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Ripcord',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:10',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Vegetable',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Prove Yourself',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:25',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'I Can\'t',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Lurgee',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:08',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Blow Out',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:01',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:29',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Creep',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:56',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Stop Whispering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:26',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Thinking About You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:41',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Ripcord',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:10',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Vegetable',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Prove Yourself',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '2:25',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'I Can\'t',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '4:13',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Lurgee',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:08',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Blow Out',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:01',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'You',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:29',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Creep',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:56',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Anyone Can Play Guitar',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '3:37',
                'musicstore_id' => 6
            ],
            [
                'song_name' => 'Stop Whispering',
                'song_writer' => 'Thom Yorke',
                'song_composer' => 'Jonny Greenwood',
                'song_genre' => 'Alternative Rock',
                'song_duration' => '5:26',
                'musicstore_id' => 6
            ]
        ]);




        $songs->each(function ($song) {
            Songs::create($song);
        });

    }
}
