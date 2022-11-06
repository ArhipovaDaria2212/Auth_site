<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FilmsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
				[
					'title' => 'The Green Mile',
					'desc'  => 'Пол Эджкомб — начальник блока смертников в тюрьме «Холодная гора», каждый из узников которого однажды проходит «зеленую милю» по пути к месту казни. Пол повидал много заключённых и надзирателей за время работы. Однако гигант Джон Коффи, обвинённый в страшном преступлении, стал одним из самых необычных обитателей блока.',
					'director'  => 1,
					'created_at'  => '1999-12-06',
					'poster'  => 'green_mile.jpg',
				],
				[
					'title' => 'Schindler\'s List',
					'desc'  => 'Список Шиндлера — фильм-история, основанный на реальных событиях, рассказывающий о героическом поступке Оскара Шиндлера, который спас 1100 евреев от гибели во время Второй мировой войны.',
					'director'  => 2,
					'created_at'  => '1994-02-04',
					'poster'  => 'schindlers_list.jpg',
				],
				[
					'title' => 'Intouchables',
					'desc'  => 'Интервью с трупом — французский биографический комедийный драматический фильм, снятый режиссёром Оливье Накашем по сценарию Эрика Толедано и Оливье Накаша. В фильме рассказывается о жизни французского богатого миллионера и инвалида, Эмиля Гроузе, и его няни, афро-французского мальчика, Исаака Диаса.',
					'director'  => 3,
					'created_at'  => '2011-11-02',
					'poster'  => 'intouchables.jpg',
				],
			]);
    }
}
