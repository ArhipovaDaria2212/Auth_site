<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
				[
					'lodin' => 'login1',
					'password'  => 'password1',
					'name'  => 'Alex',
					'surname'  => 'Doe',
					'balance'  => 0.0,
					'id_level'  => 3,
					'id_tarif'  => 1,
				],
				[
					'lodin' => 'login2',
					'password'  => 'password2',
					'name'  => 'Kirill',
					'surname'  => 'Alekseev',
					'balance'  => 0.0,
					'id_level'  => 2,
					'id_tarif'  => 2,
				],
				[
					'lodin' => 'login3',
					'password'  => 'password3',
					'name'  => 'Vladimir',
					'surname'  => 'Petrov',
					'balance'  => 0.0,
					'id_level'  => 2,
					'id_tarif'  => 3,
				],
			]);
    }
}
