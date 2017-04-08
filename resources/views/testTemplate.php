@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row set_margin">
        <div class="col-sm-2">
            <!-- Camp gol , nu baga nimic !-->
        </div>
        <div class="col-sm-8 ">
                <h1 id="GRT" style = "text-align:center;"></h1>
                <script>
                    function getGreeting(){
                        var time = new Date().getHours();
                        var greeting;
                        if (time < 10) {
                            greeting = "Bună dimineața!";
                        } 
                        else if (time < 20){
                            greeting = "Să aveți o zi minunată!";
                        } 
                        else{
                            greeting = "Bună seara!";
                        }
                        document.getElementById("GRT").innerHTML = greeting;
                    }
                </script>
        </div>
        <div class="col-sm-2">
            <!-- Camp gol , nu baga nimic !-->
        </div>
    </div>
    <div class="row set_margin">
        <div class="col-sm-6 "  >

<?php
$azi = Carbon\Carbon::now()->format('Y-m-d');
?>
            <table class="table table-striped table-hover" >
            <h1 style="text-align: center;">Orarul pe ziua de azi </h1>
              <thead class="black_theme">
                <tr>
                  <th>#</th>
                  <th>Materie</th>
                  <th>Oră</th>
                  <th>Sala</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($events as $event)
              @if (strtoupper(Auth::user()->grupa) === strtoupper($event->grupa))
              @if ($event->date === $azi)
                <tr>
                  <td>{{ $event->id }}</td>
                  <td>{{ $event->title }}</td>
                  <td>{{ $event->hour }}</td>
                  <td>
                    @foreach($rooms as $camera)
                        @if ($camera->id === $event->room_id)
                            {{ $camera->nume }}
                        @endif
                    @endforeach
                  </td>
                </tr>
                @endif
              @endif
              @endforeach 
                
        </tbody>
        </table>
        </div>
        <?php
        $counter=1;
        ?>
        <div class="col-sm-6 " >    
            <table class="table table-striped table-hover table-bordered" >
                <h1 style="text-align: center;">Ultimele tale note </h1>
                <br>
              <thead class="black_theme">
                <tr>
                  <th>#</th>
                  <th>Materie</th>
                  <th>Notă</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>

              @foreach ($grades as $nota)
              @if (Auth::user()->id === $nota->user_id)
              @if ($counter <= 5)
                <tr>
                  <td><?php echo $counter ?></td>
                  <td>
                  @foreach($courses as $curs)
                  @if($nota->course_id === $curs->id)
                        {{ $curs->materie }}
                  @endif
                  @endforeach
                  </td>
                  <td>{{ $nota->val }}</td>
                  <td>{{ $nota->date }}</td>
                </tr>
                <?php
                $counter++;
                ?>
              @endif
              @endif
              @endforeach
              </tbody>
            </table> 
        </div>
    </div>
    <div class="row set_margin">
        <div class="col-sm-6 " >
                <img src="stagii.png" style="width: 100%" class="img-responsive margin">
                <h2>
                Stagii pe bune 2017 !
                </h2>
                <blockquote>
                  <p>Programul Stagii pe Bune propune plasarea studenţilor din facultăţile cu profil IT&C în stagii de practică, desfăşurate pe durata verii, în companiile din domeniul IT&C din România.<br>
                    Fă-ți cont pe Junio și aplică la diferite stagii :
                    <a href="https://junio.ro">https://junio.ro</a></p>
                </blockquote>
        </div>
        <div class="col-sm-6 ">
                <h2>
                FII Practic organizeaza Hackathon !
                </h2>
                <blockquote>
                  <p>FII Practic Hackathon se află la a treia ediţie, se va desfășura pe parcursul a 24 de ore, în data de 1 aprilie 2017, unde participanții vor putea lucra în echipe, pentru a realiza aplicații care să rezolve o nevoie sau o problemă a comunității. 
                    Echipele vor avea între 2 și 4 membri. Vor fi maxim 10 echipe participante, așadar contează dacă vă înscrieți cât mai rapid!!
                    Formular de înscriere:
                    <a href="http://tinyurl.com/fiipractichackathon">http://tinyurl.com/fiipractichackathon</a></p>
                </blockquote>
                <img src="hackathon.jpg" style="width: 100%" class="img-responsive margin">
        </div>
    </div>
    <div class="row set_margin">
        <div class="col-sm-12 set_margin">
                <h2>
                FII CODE ediția a II-a !
                </h2>
                <blockquote>
                  <p>Se zvonește că în regatul Iașului, în lunile Martie, Aprilie și Mai, o mare competiție de algoritmică și de devoltarea aplicatiilor web și mobile urmează să înceapă. În Facultatea de Informatică Iași încep să se strângă fel de fel de probleme, grele și ușoare, dar pline de capcane și provocări. Totodată, undeva în clădire se caută în secret teme îndrăznețe pentru toți pasionații de web și mobile prin care aceștia să etaleze tehnologiile stăpânite precum și creativitatea cu care se mândresc.
                    <br>
                    Toți programatorii, cu mic cu mare sunt așteptați să își încerce forțele cot la cot cu iscusiți cunoscători de limbaje și tehnologii din regat. Vă invităm să vă pregătiți IDE-urile cele mai rapide, mouse-urile cu DPI-ul cel mai bun iar laptopurile să vă fie încărcate pentru a fi gata pe poziții pentru rundele online și pentru a câștiga un bilet spre finala din Iași!
                    Nu rata șansa să fii printre cei mai buni!
                    <br>
                    Pentru a putea urmări indeaproape parcursul nostru și a fi la curent cu noile suprize nu uitați să urmăriți pagina noastră precum și site-ul :
                    <a href="www.fiicode.com">www.fiicode.com</a></p>
                </blockquote>
                <img src="fiicode.jpeg" style="width: 100%" class="img-responsive margin">
        </div>
    </div>
    </div>


@endsection