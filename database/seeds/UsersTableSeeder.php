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
        	'matricol' => '0',
        	'email' => 'admin@fiibook.com',
        	'password' => bcrypt('admin'),
        	'nume' => 'FII',
        	'prenume' => 'FII',
        	'tata' => '',
        	'mama' => '',
            'grupa' => '',
            'sex' => 'M',
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'matricol' => '1',
            'email' => 'test@test.test',
            'password' => bcrypt('testtest'),
            'nume' => 'Numetest1',
            'prenume' => 'Prenumetest1',
            'tata' => 'Tatateset1',
            'mama' => 'Mamatest1',
            'grupa' => '1A1',
            'sex' => 'M',
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'matricol' => '2',
            'email' => 'test2@test.test',
            'password' => bcrypt('testtest'),
            'nume' => 'Numetest2',
            'prenume' => 'Prenumetest2',
            'tata' => 'Tatateset2',
            'mama' => 'Mamatest2',
            'grupa' => '1A2',
            'sex' => 'M',
        ]);
    }
}
