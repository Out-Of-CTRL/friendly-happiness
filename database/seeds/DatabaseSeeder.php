<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
    }
}
