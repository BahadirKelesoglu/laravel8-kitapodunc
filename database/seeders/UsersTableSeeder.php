<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bahadır Keleşoğlu',
            'email' => 'baho028@gmail.com',
            'password' => bcrypt('Berra2008'),
        ]);
    }
}
