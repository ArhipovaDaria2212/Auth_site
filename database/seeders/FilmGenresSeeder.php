<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FilmGenresSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		for ($i = 20; $i < 100000; $i++) {
        	DB::table('films_genres')->insert([
				[
					'id_film' => $i,
					'id_genre'  => random_int(1, 3),
				],
			]);
    	}	
	}
}
