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
        	'nume' => 'C112',
        ]);
        DB::table('rooms')->insert([
        	'id' => '3',
        	'nume' => 'C403',
        ]);
        DB::table('rooms')->insert([
        	'id' => '4',
        	'nume' => 'C413',
        ]);
        DB::table('rooms')->insert([
        	'id' => '5',
        	'nume' => 'C903',
        ]);
        DB::table('rooms')->insert([
        	'id' => '6',
        	'nume' => 'C905',
        ]);
        DB::table('rooms')->insert([
        	'id' => '7',
        	'nume' => 'C909',
        ]);
    }
}
