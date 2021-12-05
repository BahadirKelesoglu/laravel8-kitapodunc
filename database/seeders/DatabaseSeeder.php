<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //  \App\Models\User::factory(10)->create();
       // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert(['name' => 'Bahadır Keleşoğlu',
                  'email' => 'baho028@gmail.com',
                  'password' => bcrypt('Berra2008'),
              ]);

    }
}
