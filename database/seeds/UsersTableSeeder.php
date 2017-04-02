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
            'id' => '1',
        	'matricol' => 'asd',
        	'email' => 'test@test.com',
        	'password' => bcrypt('testtest'),
        	'nume' => 'qwe',
        	'prenume' => 'zxc',
        	'tata' => 'a',
        	'mama' => 'b',
            'grupa' => '1',
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'matricol' => 'asd2',
            'email' => 'test@test.test',
            'password' => bcrypt('testtest'),
            'nume' => 'test1',
            'prenume' => 'testp',
            'tata' => 'a',
            'mama' => 'b',
            'grupa' => '1',
        ]);
    }
}
