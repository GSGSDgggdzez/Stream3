<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    public function run()
    {
        // Seed Series
        DB::table('Series')->insert([
            // Breaking Bad
            [
                'Title' => 'Breaking Bad',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A high school chemistry teacher turned methamphetamine manufacturer partners with a former student to secure his family\'s financial future as he battles terminal lung cancer.',
                'Release_Year' => '2008-01-20',
                'Genre' => 'Crime, Drama, Thriller',
                'Total_Views' => 5000000,
                'Available_Language' => 'English,Spanish,French',
                'Total_Seasons' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Stranger Things
            [
                'Title' => 'Stranger Things',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A group of kids uncover supernatural mysteries and government conspiracies in the small town of Hawkins.',
                'Release_Year' => '2016-07-15',
                'Genre' => 'Drama, Fantasy, Horror',
                'Total_Views' => 6000000,
                'Available_Language' => 'English,Spanish,French,Portuguese',
                'Total_Seasons' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Game of Thrones
            [
                'Title' => 'Game of Thrones',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Nine noble families fight for control of the Iron Throne in the mythical land of Westeros.',
                'Release_Year' => '2011-04-17',
                'Genre' => 'Action, Adventure, Drama',
                'Total_Views' => 7000000,
                'Available_Language' => 'English,French,Spanish',
                'Total_Seasons' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // The Witcher
            [
                'Title' => 'The Witcher',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A monster hunter struggles to find his place in a world where people often prove more wicked than beasts.',
                'Release_Year' => '2019-12-20',
                'Genre' => 'Action, Adventure, Drama',
                'Total_Views' => 4000000,
                'Available_Language' => 'English,French,Spanish',
                'Total_Seasons' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Mandalorian',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A bounty hunter in the outer reaches of the galaxy is hired to track down a mysterious child.',
                'Release_Year' => '2019-11-12',
                'Genre' => 'Action, Adventure, Fantasy',
                'Total_Views' => 4500000,
                'Available_Language' => 'English,Spanish,French',
                'Total_Seasons' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // The Office (US)
            [
                'Title' => 'The Office (US)',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A mockumentary sitcom that follows the everyday lives of office employees working at Dunder Mifflin.',
                'Release_Year' => '2005-03-24',
                'Genre' => 'Comedy',
                'Total_Views' => 8000000,
                'Available_Language' => 'English,Spanish,French',
                'Total_Seasons' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Friends
            [
                'Title' => 'Friends',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'Follows the lives of six friends in their 20s and 30s who live in Manhattan.',
                'Release_Year' => '1994-09-22',
                'Genre' => 'Comedy, Romance',
                'Total_Views' => 10000000,
                'Available_Language' => 'English,Spanish,French',
                'Total_Seasons' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Dark
            [
                'Title' => 'Dark',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A German sci-fi thriller that explores time travel and the interconnectedness of four estranged families.',
                'Release_Year' => '2017-12-01',
                'Genre' => 'Drama, Mystery, Sci-Fi',
                'Total_Views' => 3500000,
                'Available_Language' => 'German,English,French',
                'Total_Seasons' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Seed Episodes
        DB::table('Episodes')->insert([
            // Breaking Bad Episodes
            [
                'Series_Id' => 1,
                'Title' => 'Pilot',
                'Description' => 'Walter White, a high school chemistry teacher, learns he has terminal lung cancer and decides to secure his family\'s financial future by making and selling methamphetamine.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/breaking-bad/s01e01.mp4',
                'Views' => 1000000,
                'Duration' => '00:58:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 1,
                'Title' => 'Cat\'s in the Bag...',
                'Description' => 'Walt and Jesse attempt to dispose of the bodies of two rivals but things go wrong.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/breaking-bad/s01e02.mp4',
                'Views' => 950000,
                'Duration' => '00:48:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Stranger Things Episodes
            [
                'Series_Id' => 2,
                'Title' => 'Chapter One: The Vanishing of Will Byers',
                'Description' => 'A young boy goes missing in a small town, leading his friends and family to uncover supernatural mysteries.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/stranger-things/s01e01.mp4',
                'Views' => 1200000,
                'Duration' => '01:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 2,
                'Title' => 'Chapter Two: The Weirdo on Maple Street',
                'Description' => 'The kids discover that Eleven may hold the key to finding their missing friend.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/stranger-things/s01e02.mp4',
                'Views' => 1100000,
                'Duration' => '00:50:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Game of Thrones Episodes
            [
                'Series_Id' => 3,
                'Title' => 'Winter Is Coming',
                'Description' => 'The Stark family begins to uncover dark secrets as the winter approaches.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/game-of-thrones/s01e01.mp4',
                'Views' => 2000000,
                'Duration' => '00:58:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 3,
                'Title' => 'The Kingsroad',
                'Description' => 'The Stark family begins to face challenges as they journey south to King\'s Landing.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/game-of-thrones/s01e02.mp4',
                'Views' => 1800000,
                'Duration' => '00:56:00',
                'created_at' => now(),
                'updated_at' => now()
            ],// The Mandalorian Episodes
            [
                'Series_Id' => 4,
                'Title' => 'Chapter 1: The Mandalorian',
                'Description' => 'A lone bounty hunter is hired to capture a mysterious creature on a desolate planet.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/mandalorian/s01e01.mp4',
                'Views' => 1200000,
                'Duration' => '00:39:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 4,
                'Title' => 'Chapter 2: The Child',
                'Description' => 'The Mandalorian discovers the true nature of the bounty he is tasked with capturing.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/mandalorian/s01e02.mp4',
                'Views' => 1000000,
                'Duration' => '00:42:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // The Office (US) Episodes
            [
                'Series_Id' => 5,
                'Title' => 'Pilot',
                'Description' => 'Michael Scott, the bumbling regional manager of Dunder Mifflin, introduces the first day of the office documentary.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/office-us/s01e01.mp4',
                'Views' => 2500000,
                'Duration' => '00:22:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 5,
                'Title' => 'Diversity Day',
                'Description' => 'Michael tries to improve office morale by hosting a diversity seminar, but it leads to uncomfortable moments.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/office-us/s01e02.mp4',
                'Views' => 2300000,
                'Duration' => '00:22:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Friends Episodes
            [
                'Series_Id' => 6,
                'Title' => 'The One Where Monica Gets a Roommate',
                'Description' => 'Monica gets a new roommate and Ross struggles with his divorce.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/friends/s01e01.mp4',
                'Views' => 3000000,
                'Duration' => '00:22:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 6,
                'Title' => 'The One with the Sonogram at the End',
                'Description' => 'Ross and Carol have a sonogram to find out the gender of their baby.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/friends/s01e02.mp4',
                'Views' => 2800000,
                'Duration' => '00:22:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Dark Episodes
            [
                'Series_Id' => 7,
                'Title' => 'Secrets',
                'Description' => 'The disappearance of a young boy exposes the secrets of four families living in a small German town.',
                'Season_Number' => 1,
                'Episode_Number' => 1,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/dark/s01e01.mp4',
                'Views' => 1500000,
                'Duration' => '00:55:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Series_Id' => 7,
                'Title' => 'The End of the Beginning',
                'Description' => 'The characters begin to uncover the true nature of the supernatural occurrences happening in their town.',
                'Season_Number' => 1,
                'Episode_Number' => 2,
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Series/dark/s01e02.mp4',
                'Views' => 1400000,
                'Duration' => '00:52:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
            
        ]);

        // Seed Series Cast
        DB::table('Series_Cast')->insert([
            // Breaking Bad Cast
            [
                'Name' => 'Bryan Cranston',
                'Picture_Url' => 'https://example.com/bryan-cranston.jpg',
                'Series_Id' => 1,
                'Biography' => 'Award-winning actor known for his role as Walter White in Breaking Bad',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],
            [
                'Name' => 'Aaron Paul',
                'Picture_Url' => 'https://example.com/aaron-paul.jpg',
                'Series_Id' => 1,
                'Biography' => 'Emmy Award winner for his role as Jesse Pinkman',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],
            // Stranger Things Cast
            [
                'Name' => 'Millie Bobby Brown',
                'Picture_Url' => 'https://example.com/millie-bobby-brown.jpg',
                'Series_Id' => 2,
                'Biography' => 'Known for her role as Eleven in Stranger Things.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ],
            [
                'Name' => 'Finn Wolfhard',
                'Picture_Url' => 'https://example.com/finn-wolfhard.jpg',
                'Series_Id' => 2,
                'Biography' => 'Known for his role as Mike Wheeler in Stranger Things.',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],// The Mandalorian Cast
            [
                'Name' => 'Pedro Pascal',
                'Picture_Url' => 'https://example.com/pedro-pascal.jpg',
                'Series_Id' => 4,
                'Biography' => 'Known for his role as the Mandalorian in The Mandalorian.',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],
            [
                'Name' => 'Gina Carano',
                'Picture_Url' => 'https://example.com/gina-carano.jpg',
                'Series_Id' => 4,
                'Biography' => 'Known for her role as Cara Dune in The Mandalorian.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ],
            // The Office (US) Cast
            [
                'Name' => 'Steve Carell',
                'Picture_Url' => 'https://example.com/steve-carell.jpg',
                'Series_Id' => 5,
                'Biography' => 'Known for his role as Michael Scott in The Office.',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],
            [
                'Name' => 'Jenna Fischer',
                'Picture_Url' => 'https://example.com/jenna-fischer.jpg',
                'Series_Id' => 5,
                'Biography' => 'Known for her role as Pam Beesly in The Office.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ],
            // Friends Cast
            [
                'Name' => 'Jennifer Aniston',
                'Picture_Url' => 'https://example.com/jennifer-aniston.jpg',
                'Series_Id' => 6,
                'Biography' => 'Known for her role as Rachel Green in Friends.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ],
            [
                'Name' => 'Courteney Cox',
                'Picture_Url' => 'https://example.com/courteney-cox.jpg',
                'Series_Id' => 6,
                'Biography' => 'Known for her role as Monica Geller in Friends.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ],
            // Dark Cast
            [
                'Name' => 'Louis Hofmann',
                'Picture_Url' => 'https://example.com/louis-hofmann.jpg',
                'Series_Id' => 7,
                'Biography' => 'Known for his role as Jonas Kahnwald in Dark.',
                'Position' => 'Lead Actor',
                'created_at' => now()
            ],
            [
                'Name' => 'Karoline Eichhorn',
                'Picture_Url' => 'https://example.com/karoline-eichhorn.jpg',
                'Series_Id' => 7,
                'Biography' => 'Known for her role as Charlotte Doppler in Dark.',
                'Position' => 'Lead Actress',
                'created_at' => now()
            ]
        ]);

        // Seed Series Global Rate
        DB::table('Series_Global_Rate')->insert([
            // Breaking Bad Rating
            [
                'Series_Id' => 1,
                'Company_Name' => 'IMDB',
                'Rate' => '9.5',
                'created_at' => now()
            ],
            [
                'Series_Id' => 1,
                'Company_Name' => 'Rotten Tomatoes',
                'Rate' => '96%',
                'created_at' => now()
            ],
            // Stranger Things Rating
            [
                'Series_Id' => 2,
                'Company_Name' => 'IMDB',
                'Rate' => '8.7',
                'created_at' => now()
            ],
            [
                'Series_Id' => 2,
                'Company_Name' => 'Rotten Tomatoes',
                'Rate' => '93%',
                'created_at' => now()
            ]
        ]);
    }
}
