<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	'id' => '1',
        	'course_id' => '1',
        	#'date' => '2017/04/02',
        	#'hour' => '10:00',
        	'title' => 'SO',
        	'hour' => '10',
        	'zi' => '1',
        	'paritate' => '0',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '2',
        	'course_id' => '2',
        	#'date' => '2017/04/02',
        	#'hour' => '08:00',
        	'hour' => '8',
        	'zi' => '2',
        	'paritate' => '0',
        	'title' => 'PA',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '3',
        	'course_id' => '3',
        	#'date' => '2017/04/02',
        	#'hour' => '12:00',
        	'hour' => '12',
        	'zi' => '1',
        	'paritate' => '0',
        	'title' => 'FAI',
        	'description' => 'cel mai naspa curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '4',
        	'course_id' => '4',
        	#'date' => '2017/04/02',
        	#'hour' => '14:00',
        	'hour' => '14',
        	'zi' => '1',
        	'paritate' => '0',
        	'title' => 'Engleza',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '5',
        	'course_id' => '5',
        	#'date' => '2017/04/02',
        	#'hour' => '10:00',
        	'hour' => '10',
        	'zi' => '2',
        	'paritate' => '0',
        	'title' => 'ACSO',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '6',
        	'course_id' => '6',
        	#'date' => '2017/04/02',
        	#'hour' => '10:00',
        	'hour' => '16',
        	'zi' => '1',
        	'paritate' => '0',
        	'title' => 'Matematica',
        	'description' => 'aoleu',
        	'type' => 'seminar',
            'grupa' => 1,
        ]);
    }
}
