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
		for ($i = 0; $i < 55352; $i++) {
        	DB::table('films')->insert([
					[
						'title' => Str::random(10),
						'desc'  => Str::random(100),
						'director'  => random_int(1, 3),
						'created_at'  => random_int(1900, 2022) . '-' . random_int(1, 12) . '-' . random_int(1, 28),
						'poster'  => Str::random(10) . '.jpg',
					],
				]);
		}
    }
}
