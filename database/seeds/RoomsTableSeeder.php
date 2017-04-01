<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
        	'id' => '1',
        	'nume' => 'C2',
        ]);
        DB::table('rooms')->insert([
        	'id' => '2',
        	'nume' => 'C419',
        ]);
        DB::table('rooms')->insert([
        	'id' => '3',
        	'nume' => 'C3',
        ]);
    }
}
