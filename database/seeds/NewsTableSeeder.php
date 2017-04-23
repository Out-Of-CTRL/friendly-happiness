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
        	'link_imagine' => 'stagii.png',
        	'text' => '<p>Programul Stagii pe Bune propune plasarea studenţilor din facultăţile cu profil IT&C în stagii de practică, desfăşurate pe durata verii, în companiile din domeniul IT&C din România.<br>
                    Fă-ți cont pe Junio și aplică la diferite stagii :
                    <a href="https://junio.ro">https://junio.ro</a></p>',
        	
        ]);
        DB::table('news')->insert([
            'id' => '2',
            'titlu' => 'FII Practic organizeaza Hackathon !',
            'link_imagine' => 'hackathon.jpg',
            'text' => '<p>FII Practic Hackathon se află la a treia ediţie, se va desfășura pe parcursul a 24 de ore, în data de 1 aprilie 2017, unde participanții vor putea lucra în echipe, pentru a realiza aplicații care să rezolve o nevoie sau o problemă a comunității. 
                    Echipele vor avea între 2 și 4 membri. Vor fi maxim 10 echipe participante, așadar contează dacă vă înscrieți cât mai rapid!!
                    Formular de înscriere:
                    <a href="http://tinyurl.com/fiipractichackathon">http://tinyurl.com/fiipractichackathon</a></p>',
            
        ]);
        DB::table('news')->insert([
            'id' => '3',
            'titlu' => 'FII CODE ediția a II-a !',
            'link_imagine' => 'fiicode.jpeg',
            'text' => ' <p>Se zvonește că în regatul Iașului, în lunile Martie, Aprilie și Mai, o mare competiție de algoritmică și de devoltarea aplicatiilor web și mobile urmează să înceapă. În Facultatea de Informatică Iași încep să se strângă fel de fel de probleme, grele și ușoare, dar pline de capcane și provocări. Totodată, undeva în clădire se caută în secret teme îndrăznețe pentru toți pasionații de web și mobile prin care aceștia să etaleze tehnologiile stăpânite precum și creativitatea cu care se mândresc.
                    <br>
                    Toți programatorii, cu mic cu mare sunt așteptați să își încerce forțele cot la cot cu iscusiți cunoscători de limbaje și tehnologii din regat. Vă invităm să vă pregătiți IDE-urile cele mai rapide, mouse-urile cu DPI-ul cel mai bun iar laptopurile să vă fie încărcate pentru a fi gata pe poziții pentru rundele online și pentru a câștiga un bilet spre finala din Iași!
                    Nu rata șansa să fii printre cei mai buni!
                    <br>
                    Pentru a putea urmări indeaproape parcursul nostru și a fi la curent cu noile suprize nu uitați să urmăriți pagina noastră precum și site-ul :
                    <a href="www.fiicode.com">www.fiicode.com</a></p>',
            
        ]);
    }
}
