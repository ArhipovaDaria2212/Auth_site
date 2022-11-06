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
        DB::table('films_genres')->insert([
				[
					'id_film' => 1,
					'id_genre'  => 1,
				],
				[
					'id_film' => 2,
					'id_genre'  => 1,
				],
				[
					'id_film' => 3,
					'id_genre'  => 1,
				],
			]);
    }
}
