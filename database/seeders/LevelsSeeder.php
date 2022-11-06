<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LevelsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
				[
					'title' => 'Администратор',
					'desc'  => 'Полный доступ к сайту',
				],
				[
					'title' => 'Пользователь',
					'desc'  => 'Доступ к просмотру фильмов',
				],
				[
					'title' => 'Гость',
					'desc'  => 'Доступ только к главной странице',
				],
			]);
    }
}
