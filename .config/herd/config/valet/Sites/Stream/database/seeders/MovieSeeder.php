<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        // Seed Movies
        DB::table('Movies')->insert([
            // Action Genre (4 movies)
            [
                'Title' => 'The Dark Knight',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(4).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Batman fights against the Joker in Gotham City',
                'Release_Year' => '2008-07-18',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Action',
                'Total_Views' => 1000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Die Hard',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(4).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'Action-packed thriller about a cop fighting terrorists',
                'Release_Year' => '1988-07-20',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Action',
                'Total_Views' => 900000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Mad Max: Fury Road',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(6).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A post-apocalyptic action film following a man and a warrior trying to escape a warlord.',
                'Release_Year' => '2015-05-15',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Action',
                'Total_Views' => 2000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'John Wick',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(7).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A retired hitman seeks vengeance against those who wronged him.',
                'Release_Year' => '2014-10-24',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Action',
                'Total_Views' => 1500000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // Comedy Genre (4 movies)
            [
                'Title' => 'The Hangover',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Comedy/Image+(11).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Friends search for their missing buddy after a wild bachelor party',
                'Release_Year' => '2009-06-05',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Comedy',
                'Total_Views' => 800000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Step Brothers',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Comedy/Image+(12).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'Two middle-aged, lazy men become roommates when their single parents marry each other.',
                'Release_Year' => '2008-07-25',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Comedy',
                'Total_Views' => 950000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => '21 Jump Street',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Comedy/Image+(9).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Two police officers go undercover at a high school to bust a drug ring.',
                'Release_Year' => '2012-03-16',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Comedy',
                'Total_Views' => 850000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Other Guys',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Comedy/Image+(11).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'Two mismatched detectives investigate a wealthy businessman.',
                'Release_Year' => '2010-08-06',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Comedy',
                'Total_Views' => 700000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // Horror Genre (4 movies)
            [
                'Title' => 'The Conjuring',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(4).svg',
                'Big_Thumbnail_Url' => '/Big/big2.svg',
                'Description' => 'Paranormal investigators work to help a family terrorized by a dark presence.',
                'Release_Year' => '2013-07-19',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Horror',
                'Total_Views' => 1200000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Insidious',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(6).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A family becomes haunted by a dark force after moving into a new house.',
                'Release_Year' => '2010-04-01',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Horror',
                'Total_Views' => 1150000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'A Nightmare on Elm Street',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(7).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A group of teens are stalked and killed by a burned man with a glove full of knives.',
                'Release_Year' => '1984-11-09',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Horror',
                'Total_Views' => 950000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Exorcist',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(4).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A young girl is possessed by a mysterious entity, and her mother seeks help from two priests.',
                'Release_Year' => '1973-12-26',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Horror',
                'Total_Views' => 1300000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // Drama Genre (4 movies)
            [
                'Title' => 'The Shawshank Redemption',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Drama/Image+(15).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption.',
                'Release_Year' => '1994-09-23',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Drama',
                'Total_Views' => 5000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Forrest Gump',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/Action/Image+(7).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man.',
                'Release_Year' => '1994-07-06',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Drama',
                'Total_Views' => 4500000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Godfather',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(1).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'Release_Year' => '1972-03-24',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Drama',
                'Total_Views' => 7000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Schindler’s List',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'In German-occupied Poland during World War II, businessman Oskar Schindler gradually becomes concerned for his Jewish workforce.',
                'Release_Year' => '1993-12-15',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Drama',
                'Total_Views' => 7500000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Notebook',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(3).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A young couple falls in love, but life and circumstances tear them apart.',
                'Release_Year' => '2004-06-25',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Romance',
                'Total_Views' => 800000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Pride and Prejudice',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image.svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'An English woman battles societal expectations and love as she tries to marry her suitor.',
                'Release_Year' => '2005-09-16',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Romance',
                'Total_Views' => 950000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Titanic',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(1).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A love story set against the backdrop of the ill-fated RMS Titanic.',
                'Release_Year' => '1997-12-19',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Romance',
                'Total_Views' => 2000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'La La Land',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A jazz musician and an aspiring actress fall in love but struggle with the compromises of their dreams.',
                'Release_Year' => '2016-12-09',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Romance',
                'Total_Views' => 1800000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // Sci-Fi Genre (4 movies)
            [
                'Title' => 'Interstellar',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/SciFi/Image+(1).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A group of explorers journey through a wormhole in space to ensure humanity\'s survival.',
                'Release_Year' => '2014-11-07',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Sci-Fi',
                'Total_Views' => 3000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Blade Runner 2049',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A young blade runner unearths a long-buried secret that has the potential to plunge society into chaos.',
                'Release_Year' => '2017-10-06',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Sci-Fi',
                'Total_Views' => 2200000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Matrix',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'Release_Year' => '1999-03-31',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Sci-Fi',
                'Total_Views' => 4000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Star Wars: Episode IV - A New Hope',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A young farm boy joins a rebel alliance and helps destroy a planet-destroying space station.',
                'Release_Year' => '1977-05-25',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Sci-Fi',
                'Total_Views' => 5000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // Thriller Genre (4 movies)
            [
                'Title' => 'Se7en',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'Two detectives hunt a serial killer who uses the seven deadly sins as his modus operandi.',
                'Release_Year' => '1995-09-22',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Thriller',
                'Total_Views' => 3000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'Gone Girl',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(3).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A woman disappears, and her husband becomes the prime suspect in her disappearance.',
                'Release_Year' => '2014-10-03',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Thriller',
                'Total_Views' => 4000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Sixth Sense',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(1).svg',
                'Big_Thumbnail_Url' => '/Big/big.svg',
                'Description' => 'A young boy communicates with spirits that don’t know they’re dead.',
                'Release_Year' => '1999-08-06',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Thriller',
                'Total_Views' => 3500000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Title' => 'The Silence of the Lambs',
                'Small_Thumbnail_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/thumdnail/adventure/Image+(2).svg',
                'Big_Thumbnail_Url' => '/Big/big1.svg',
                'Description' => 'A young FBI agent seeks the help of a cannibalistic serial killer to catch another serial killer.',
                'Release_Year' => '1991-02-14',
                'Video_Url' => 'https://netlaravel1.s3.eu-north-1.amazonaws.com/Movie/movie/%40VODAFRIQUE+Shaka+Ilembe+S01E01.mp4',
                'Genre' => 'Thriller',
                'Total_Views' => 6000000,
                'Available_Language' => 'English,French,Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            // More genres and movies can follow this structure
        ]);
        
        
        // Seed Comments
        DB::table('Comment')->insert([
            [
                'Movie_Id' => 1,
                'User_Id' => 1,
                'Rate' => '9.5',
                'Comment' => 'Best superhero movie ever made!',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 1,
                'User_Id' => 1,
                'Rate' => '10.0',
                'Comment' => 'A perfect film, everything about it is phenomenal!',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 2,
                'User_Id' => 1,
                'Rate' => '9.0',
                'Comment' => 'Mind-bending masterpiece',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 2,
                'User_Id' => 1,
                'Rate' => '8.5',
                'Comment' => 'An intellectual thriller that keeps you on the edge of your seat',
                'created_at' => now()
            ]
        ]);

       
        // Seed Global_Rate
        DB::table('Global_Rate')->insert([
            [
                'Movie_Id' => 1,
                'Company_Name' => 'IMDB',
                'Rate' => '9.0',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 1,
                'Company_Name' => 'Rotten Tomatoes',
                'Rate' => '94%',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 2,
                'Company_Name' => 'Rotten Tomatoes',
                'Rate' => '86%',
                'created_at' => now()
            ],
            [
                'Movie_Id' => 2,
                'Company_Name' => 'Metacritic',
                'Rate' => '74%',
                'created_at' => now()
            ]
        ]);
    }
}
