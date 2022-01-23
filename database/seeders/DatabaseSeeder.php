<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $movies=[
            ['movie_id'=>1,'movie_title'=>'Rambo', 'movie_release_year'=>2008, 'movie_runtime_minutes'=>93, 'imdb_rating'=>7, 'metascore_rating'=>46],
            ['movie_id'=>2,'movie_title'=>'Rambo: First Blood', 'movie_release_year'=>1982, 'movie_runtime_minutes'=>93, 'imdb_rating'=>7.7, 'metascore_rating'=>61],
            ['movie_id'=>3,'movie_title'=>'Rambo: First Blood Part II', 'movie_release_year'=>1985, 'movie_runtime_minutes'=>96, 'imdb_rating'=>6.5, 'metascore_rating'=>47],
            ['movie_id'=>4,'movie_title'=>'Rambo III', 'movie_release_year'=>1988, 'movie_runtime_minutes'=>102, 'imdb_rating'=>5.8, 'metascore_rating'=>36],
            ['movie_id'=>5,'movie_title'=>'Rambo: Last Blood', 'movie_release_year'=>2019, 'movie_runtime_minutes'=>89, 'imdb_rating'=>6.1, 'metascore_rating'=>26],
            ['movie_id'=>6,'movie_title'=>'The Godfather', 'movie_release_year'=>1972, 'movie_runtime_minutes'=>175, 'imdb_rating'=>9.2, 'metascore_rating'=>100],
            ['movie_id'=>7,'movie_title'=>'The Godfather: Part II', 'movie_release_year'=>1974, 'movie_runtime_minutes'=>202, 'imdb_rating'=>9, 'metascore_rating'=>90],
            ['movie_id'=>8,'movie_title'=>'The Godfather: Part III', 'movie_release_year'=>1990, 'movie_runtime_minutes'=>162, 'imdb_rating'=>7.6, 'metascore_rating'=>60],
            ['movie_id'=>9,'movie_title'=>'Tango & Cash', 'movie_release_year'=>1989, 'movie_runtime_minutes'=>104, 'imdb_rating'=>6.4, 'metascore_rating'=>41],
            ['movie_id'=>10,'movie_title'=>'Interstellar', 'movie_release_year'=>2014, 'movie_runtime_minutes'=>169, 'imdb_rating'=>8.6, 'metascore_rating'=>74],
            ['movie_id'=>11,'movie_title'=>'Pirates of the Caribbean: The Curse of the Black Pearl', 'movie_release_year'=>2003, 'movie_runtime_minutes'=>143, 'imdb_rating'=>8.0, 'metascore_rating'=>63]


        ];

        $actors=[
            ['actor_id'=>1,'first_name'=>'Sylvester', 'last_name'=>'Stallone'],
            ['actor_id'=>2,'first_name'=>'Richard', 'last_name'=>'Crenna'],
            ['actor_id'=>3,'first_name'=>'Brian', 'last_name'=>'Dennehy'],
            ['actor_id'=>4,'first_name'=>'Marlon', 'last_name'=>'Brando'],
            ['actor_id'=>5,'first_name'=>'Al', 'last_name'=>'Pacino'],
            ['actor_id'=>6,'first_name'=>'James', 'last_name'=>'Caan'],
            ['actor_id'=>7,'first_name'=>'Jack', 'last_name'=>'Palance'],
            ['actor_id'=>8,'first_name'=>'Kurt', 'last_name'=>'Russell'],
            ['actor_id'=>9,'first_name'=>'Matthew', 'last_name'=>'McConaughey'],
            ['actor_id'=>10,'first_name'=>'Johnny', 'last_name'=>'Depp']




        ];

        $movie_actor=[
            ['actor_id'=>1,'movie_id'=>1],
            ['actor_id'=>1,'movie_id'=>2],
            ['actor_id'=>1,'movie_id'=>3],
            ['actor_id'=>1,'movie_id'=>4],
            ['actor_id'=>1,'movie_id'=>5],
            ['actor_id'=>1,'movie_id'=>9],
            ['actor_id'=>2,'movie_id'=>1],
            ['actor_id'=>2,'movie_id'=>2],
            ['actor_id'=>2,'movie_id'=>3],
            ['actor_id'=>3,'movie_id'=>1],
            ['actor_id'=>4,'movie_id'=>6],
            ['actor_id'=>5,'movie_id'=>6],
            ['actor_id'=>5,'movie_id'=>7],
            ['actor_id'=>5,'movie_id'=>8],
            ['actor_id'=>6,'movie_id'=>6],
            ['actor_id'=>7,'movie_id'=>9],
            ['actor_id'=>8,'movie_id'=>9],
            ['actor_id'=>9,'movie_id'=>10],
            ['actor_id'=>10,'movie_id'=>11]

        ];

        $genres=[
            ['genre_id'=>1,'genre_name'=>'Action'],
            ['genre_id'=>2,'genre_name'=>'Crime/Drama'],
            ['genre_id'=>3,'genre_name'=>'Fantasy'],
            ['genre_id'=>4,'genre_name'=>'Science fiction']
        ];

        $movie_genre=[
            ['genre_id'=>1,'movie_id'=>1],
            ['genre_id'=>1,'movie_id'=>2],
            ['genre_id'=>1,'movie_id'=>3],
            ['genre_id'=>1,'movie_id'=>4],
            ['genre_id'=>1,'movie_id'=>5],
            ['genre_id'=>2,'movie_id'=>6],
            ['genre_id'=>2,'movie_id'=>7],
            ['genre_id'=>2,'movie_id'=>8],
            ['genre_id'=>1,'movie_id'=>9],
            ['genre_id'=>4,'movie_id'=>10],
            ['genre_id'=>3,'movie_id'=>11],
        ];

        $awards=[
            ['award_id'=>1,'oscar'=>3,'golden_globe'=>5],
            ['award_id'=>2,'oscar'=>6,'golden_globe'=>0],
            ['award_id'=>3,'oscar'=>1,'golden_globe'=>0]

        ];

        $movie_award=[
            ['award_id'=>1,'movie_id'=>6],
            ['award_id'=>2,'movie_id'=>7],
            ['award_id'=>3,'movie_id'=>10]
        ];

        $directors=[
            ['director_id'=>1,'first_name'=>'Sylvester','last_name'=>'Stallone'],
            ['director_id'=>2,'first_name'=>'Ted','last_name'=>'Kotcheff'],
            ['director_id'=>3,'first_name'=>'George','last_name'=>'Cosmatos'],
            ['director_id'=>4,'first_name'=>'Peter','last_name'=>'MacDonald'],
            ['director_id'=>5,'first_name'=>'Adrian','last_name'=>'Grünberg'],
            ['director_id'=>6,'first_name'=>'Francis','last_name'=>'Ford Coppola'],
            ['director_id'=>7,'first_name'=>'Andrei','last_name'=>'Konchalovsky'],
            ['director_id'=>8,'first_name'=>'Christopher','last_name'=>'Nolan'],
            ['director_id'=>9,'first_name'=>'Gore','last_name'=>'Verbinski']

        ];

        $movie_director=[
            ['director_id'=>1,'movie_id'=>1],
            ['director_id'=>2,'movie_id'=>2],
            ['director_id'=>3,'movie_id'=>3],
            ['director_id'=>4,'movie_id'=>4],
            ['director_id'=>5,'movie_id'=>5],
            ['director_id'=>6,'movie_id'=>6],
            ['director_id'=>6,'movie_id'=>7],
            ['director_id'=>6,'movie_id'=>8],
            ['director_id'=>7,'movie_id'=>9],
            ['director_id'=>8,'movie_id'=>10],
            ['director_id'=>9,'movie_id'=>11]


        ];

        $producers=[
            ['producer_id'=>1,'first_name'=>'Avi','last_name'=>'Lerner'],
            ['producer_id'=>2,'first_name'=>'Kevin','last_name'=>'King Templeton'],
            ['producer_id'=>3,'first_name'=>'John','last_name'=>'Thompson'],
            ['producer_id'=>4,'first_name'=>'Buzz','last_name'=>'Feitshans'],
            ['producer_id'=>5,'first_name'=>'Yariv','last_name'=>'Lerner'],
            ['producer_id'=>6,'first_name'=>'Les','last_name'=>'Weldon'],
            ['producer_id'=>7,'first_name'=>'Albert','last_name'=>'S. Ruddy'],
            ['producer_id'=>8,'first_name'=>'Francis','last_name'=>'Ford Coppola'],
            ['producer_id'=>9,'first_name'=>'Jon','last_name'=>'Peters'],
            ['producer_id'=>10,'first_name'=>'Peter','last_name'=>'Guber'],
            ['producer_id'=>11,'first_name'=>'Emma','last_name'=>'Thomas'],
            ['producer_id'=>12,'first_name'=>'Christopher','last_name'=>'Nolan'],
            ['producer_id'=>13,'first_name'=>'Lynda','last_name'=>'Obst'],
            ['producer_id'=>14,'first_name'=>'Jerry','last_name'=>'Bruckheimer']




        ];

        $movie_producer=[
            ['producer_id'=>1,'movie_id'=>1],
            ['producer_id'=>1,'movie_id'=>5],
            ['producer_id'=>2,'movie_id'=>1],
            ['producer_id'=>2,'movie_id'=>5],
            ['producer_id'=>3,'movie_id'=>1],
            ['producer_id'=>4,'movie_id'=>2],
            ['producer_id'=>4,'movie_id'=>3],
            ['producer_id'=>4,'movie_id'=>4],
            ['producer_id'=>5,'movie_id'=>5],
            ['producer_id'=>6,'movie_id'=>5],
            ['producer_id'=>7,'movie_id'=>6],
            ['producer_id'=>8,'movie_id'=>7],
            ['producer_id'=>8,'movie_id'=>8],
            ['producer_id'=>9,'movie_id'=>9],
            ['producer_id'=>10,'movie_id'=>9],
            ['producer_id'=>11,'movie_id'=>10],
            ['producer_id'=>12,'movie_id'=>10],
            ['producer_id'=>13,'movie_id'=>10],
            ['producer_id'=>14,'movie_id'=>11]




        ];

        DB::table('movies')->insert($movies);
        DB::table('actors')->insert($actors);
        DB::table('movie_actor')->insert($movie_actor);
        DB::table('genres')->insert($genres);
        DB::table('movie_genre')->insert($movie_genre);
        DB::table('awards')->insert($awards);
        DB::table('movie_award')->insert($movie_award);
        DB::table('directors')->insert($directors);
        DB::table('movie_director')->insert($movie_director);
        DB::table('producers')->insert($producers);
        DB::table('movie_producer')->insert($movie_producer);










    }
}
