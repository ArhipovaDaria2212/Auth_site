<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TariffsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariffs')->insert([
				[
					'title' => 'Free',
					'desc'  => 'Бесплатный тариф',
					'price'  => 0.0,
				],
				[
					'title' => 'Premium',
					'desc'  => 'Премиум тариф',
					'price'  => 100.0,
				],
				[
					'title' => 'VIP',
					'desc'  => 'VIP тариф',
					'price'  => 150.0,
				],
			]);
    }
}
