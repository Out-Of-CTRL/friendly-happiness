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
        	'date' => '2017/02/04',
        	'hour' => '10:00',
        	'title' => 'SO',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '2',
        	'date' => '2017/02/04',
        	'hour' => '08:00',
        	'title' => 'PA',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '3',
        	'date' => '2017/02/04',
        	'hour' => '12:00',
        	'title' => 'FAI',
        	'description' => 'cel mai naspa curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '4',
        	'date' => '2017/02/04',
        	'hour' => '14:00',
        	'title' => 'Engleza',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '5',
        	'date' => '2017/02/04',
        	'hour' => '10:00',
        	'title' => 'ACSO',
        	'description' => 'cel mai tare curs',
        	'type' => 'curs',
            'grupa' => 1,
        ]);
        DB::table('events')->insert([
        	'id' => '6',
        	'date' => '2017/02/04',
        	'hour' => '10:00',
        	'title' => 'Matematica',
        	'description' => 'aoleu',
        	'type' => 'seminar',
            'grupa' => 1,
        ]);
    }
}
