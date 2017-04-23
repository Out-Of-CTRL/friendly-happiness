<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
        	'id' => '1',
        	'nume' => 'I1A1',
        ]);
        DB::table('groups')->insert([
        	'id' => '2',
        	'nume' => 'I1A2',
        ]);
        DB::table('groups')->insert([
        	'id' => '3',
        	'nume' => 'I2A3',
        ]);
        DB::table('groups')->insert([
        	'id' => '4',
        	'nume' => 'I3A1',
        ]);
        DB::table('groups')->insert([
        	'id' => '5',
        	'nume' => 'I3A5',
        ]);
        DB::table('groups')->insert([
        	'id' => '6',
        	'nume' => 'I2B3',
        ]);

    }
}
