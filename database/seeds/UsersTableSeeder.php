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
        	'matricol' => 'asd',
        	'email' => 'test@test.com',
        	'password' => bcrypt('testtest'),
        	'nume' => 'qwe',
        	'prenume' => 'zxc',
        	'tata' => 'a',
        	'mama' => 'b',
        ]);
    }
}
