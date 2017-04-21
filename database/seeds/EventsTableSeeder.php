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
        	'hour' => '12',
        	'zi' => '2',
        	'paritate' => '0',
        	'room_id' => '1',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '2',
        	'course_id' => '1',
        	#'date' => '2017/04/02',
        	#'hour' => '08:00',
        	'hour' => '18',
        	'zi' => '5',
        	'paritate' => '0',
        	'title' => 'SO',
        	'room_id' => '4',
        	'description' => 'cel mai tare curs',
        	'type' => 'seminar',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '3',
        	'course_id' => '2',
        	'hour' => '10',
        	'zi' => '3',
        	'paritate' => '0',
        	'title' => 'PA',
        	'room_id' => '1',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '4',
        	'course_id' => '2',
        	'hour' => '16',
        	'zi' => '4',
        	'paritate' => '0',
        	'title' => 'PA',
        	'room_id' => '5',
        	'description' => 'cel mai tare curs',
        	'type' => 'seminar',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '5',
        	'course_id' => '3',
        	'hour' => '8',
        	'zi' => '3',
        	'paritate' => '0',
        	'title' => 'FAI',
        	'room_id' => '1',
        	'description' => 'cel mai naspa curs',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '6',
        	'course_id' => '3',
        	'hour' => '10',
        	'zi' => '1',
        	'paritate' => '0',
        	'title' => 'FAI',
        	'room_id' => '6',
        	'description' => 'cel mai naspa curs',
        	'type' => 'seminar',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '7',
        	'course_id' => '4',
        	'hour' => '12',
        	'zi' => '1',
        	'paritate' => '1',
        	'title' => 'Engleza',
        	'room_id' => '1',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '8',
        	'course_id' => '4',
        	'hour' => '16',
        	'zi' => '2',
        	'paritate' => '2',
        	'title' => 'Engleza',
        	'room_id' => '7',
        	'description' => 'cel mai tare curs',
        	'type' => 'seminar',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '9',
        	'course_id' => '5',
        	'hour' => '8',
        	'zi' => '1',
        	'paritate' => '0',
        	'title' => 'POO',
        	'room_id' => '1',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '10',
        	'course_id' => '5',
        	'hour' => '8',
        	'zi' => '5',
        	'paritate' => '0',
        	'title' => 'POO',
        	'room_id' => '3',
        	'description' => 'cel mai tare curs',
        	'type' => 'seminar',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '11',
        	'course_id' => '6',
        	'hour' => '8',
        	'zi' => '2',
        	'paritate' => '0',
        	'title' => 'PS',
        	'room_id' => '1',
        	'description' => 'aoleu',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
        DB::table('events')->insert([
        	'id' => '12',
        	'course_id' => '6',
        	'hour' => '16',
        	'zi' => '5',
        	'paritate' => '0',
        	'title' => 'PS',
        	'room_id' => '4',
        	'description' => 'aoleu',
        	'type' => 'curs',
            'grupa' => '1A1',
        ]);
    }
}
