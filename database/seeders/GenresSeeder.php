<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GenresSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
				[
					'title' => 'Драма',
					'desc'  => 'Литературный и сценический жанр. Получил особое распространение в литературе XVIII-XXI веков, постепенно вытеснив другой жанр драматургии - трагедию, противопоставив ему преимущественно бытовой сюжет и более приближенный к обыденной реальности стиль.',
				],
				[
					'title' => 'Вестерн',
					'desc'  => 'Фильм про вестерн',
				],
				[
					'title' => 'Боевик',
					'desc'  => 	'Фильм про боевик',
				],
			]);
    }
}
