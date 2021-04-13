<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'manager_name' => 'kloysa',
            'manager_surname' => 'deneme',
            'manager_user_name' => 'kloysa',
            'manager_email' => 'kloysa@gmail.com',
            'manager_password' => Hash::make('123'),
            'manager_authority' => 'kısıtlı',
            'manager_status' => 'aktif',
        ]);
    }
}
