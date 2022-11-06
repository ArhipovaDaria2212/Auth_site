<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class OrdersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
				[
					'id_user' => 1,
					'id_tariff'  => 1,
				],
				[
					'id_user' => 2,
					'id_tariff'  => 2,
				],
				[
					'id_user' => 3,
					'id_tariff'  => 3,
				],
			]);
    }
}
