<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        	'id' => '1',
        	'materie' => 'SO',
        	'user_id' => '1',
        	'nr_credite' => '6',
        	
        ]);
        DB::table('courses')->insert([
        	'id' => '2',
        	'materie' => 'PA',
        	'user_id' => '1',
        	'nr_credite' => '5',
        	
        ]);
        DB::table('courses')->insert([
        	'id' => '3',
        	'materie' => 'FAI',
        	'user_id' => '1',
        	'nr_credite' => '5',
        	
        ]);
        DB::table('courses')->insert([
        	'id' => '4',
        	'materie' => 'Engleza',
        	'user_id' => '1',
        	'nr_credite' => '5',
        	
        ]);
        DB::table('courses')->insert([
        	'id' => '5',
        	'materie' => 'POO',
        	'user_id' => '6',
            'nr_credite' => '5',
        	
        ]);
        DB::table('courses')->insert([
        	'id' => '6',
        	'materie' => 'PS',
        	'user_id' => '2',
        	'nr_credite' => '4',
        	
        ]);
    }
}
