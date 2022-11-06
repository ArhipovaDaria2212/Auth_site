<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Database\Seeders\FilmGenresSeeder;
use Database\Seeders\ProducersSeeder;
use Database\Seeders\FilmsSeeder;
use Database\Seeders\FilmsTarrifsSeeder;
use Database\Seeders\GenresSeeder;
use Database\Seeders\LevelsSeeder;
use Database\Seeders\OrdersSeeder;

use Database\Seeders\TariffsSeeder;
use Database\Seeders\UsersSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
			GenresSeeder::class,
			ProducersSeeder::class,
			FilmsSeeder::class,
			FilmGenresSeeder::class,
			LevelsSeeder::class,
			TariffsSeeder::class,
			FilmsTarrifsSeeder::class,
			UsersSeeder::class,
			OrdersSeeder::class,
		]);
    }
    
}
