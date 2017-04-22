<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	'id' => '1',
        	'titlu' => 'Stagii pe bune 2017 !',
        	'link_imagine' => 'http://127.0.0.1:8000/stagii.png',
        	'text' => 'Programul Stagii pe Bune propune plasarea studenţilor din facultăţile cu profil IT&C în stagii de practică, desfăşurate pe durata verii, în companiile din domeniul IT&C din România.
Fă-ți cont pe Junio și aplică la diferite stagii : https://junio.ro',
        	
        ]);
    }
}
