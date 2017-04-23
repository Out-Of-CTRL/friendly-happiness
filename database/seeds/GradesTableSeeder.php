<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('grades')->insert([
        	'id' => '1',
        	'val' => '2',
        	'course_id' => '1',
        	'user_id' => '2',
        	'date' => '2017-04-23',
        ]);
         DB::table('grades')->insert([
        	'id' => '2',
        	'val' => '7',
        	'course_id' => '2',
        	'user_id' => '2',
        	'date' => '2017-04-23',
        ]);
         DB::table('grades')->insert([
        	'id' => '3',
        	'val' => '4.86',
        	'course_id' => '2',
        	'user_id' => '2',
        	'date' => '2017-04-21',
        ]);
         \DB::table('grades')->insert([
        	'id' => '4',
        	'val' => '9',
        	'course_id' => '3',
        	'user_id' => '2',
        	'date' => '2017-04-22',
        ]);
         DB::table('grades')->insert([
        	'id' => '5',
        	'val' => '7',
        	'course_id' => '2',
        	'user_id' => '2',
        	'date' => '2017-04-23',
        ]);
         DB::table('grades')->insert([
        	'id' => '6',
        	'val' => '10',
        	'course_id' => '4',
        	'user_id' => '2',
        	'date' => '2017-04-21',
        ]);
         DB::table('grades')->insert([
        	'id' => '7',
        	'val' => '10',
        	'course_id' => '5',
        	'user_id' => '2',
        	'date' => '2017-04-21',
        ]);
         DB::table('grades')->insert([
        	'id' => '8',
        	'val' => '7',
        	'course_id' => '5',
        	'user_id' => '2',
        	'date' => '2017-04-21',
        ]);
         DB::table('grades')->insert([
        	'id' => '9',
        	'val' => '2',
        	'course_id' => '6',
        	'user_id' => '2',
        	'date' => '2017-04-20',
        ]);
         DB::table('grades')->insert([
        	'id' => '10',
        	'val' => '7',
        	'course_id' => '6',
        	'user_id' => '2',
        	'date' => '2017-04-20',
        ]);
    }
}
