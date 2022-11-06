<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProducersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert([
				[
					'name' => 'Frank',
					'surname'  => 'Darabont',
					'country'  => 'USA',
				],
				[
					'name' => 'Steven',
					'surname'  => 'Spielberg',
					'country'  => 'USA',
				],
				[
					'name' => 'Olive',
					'surname'  => 'Nakache',
					'country'  => 'France',
				],
			]);
    }
}
