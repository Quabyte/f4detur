<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Orcun',
            'email' => 'orcun.otacioglu@acikgise.com',
            'password' => bcrypt('password'),
        ]);
    }
}
