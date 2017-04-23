

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <title> Home </title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="sidenavLeft.css">
    <link rel="stylesheet" type="text/css" href="sidenavRight.css">
</head>
<body onLoad = "getGreeting();">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/home">FiiBook</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/orar">Orar <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user() ? Auth::user()->prenume : 'Guest' }}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                               <li><a href="profil">Profilul meu</a></li>
                               <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        
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
            <?php $counter = 0; ?>
             
            @foreach ($events as $ora)

            <?php
            $today = getdate();
            $day = $today['wday'];
            ?>

            @if($ora->zi === $day)
                    <?php $counter = $counter + 1; ?>
                    @foreach($courses as $curs)
                        @if($curs->id === $ora->course_id)
                            <tr>
                                <td>
                                    {{ $counter }}
                                </td>

                                <td>
                                    {{ $curs->materie }}
                                </td>

                                <td>
                                    {{ $ora->hour }}
                                </td>

                                <td>
                                    @foreach($rooms as $sala)
                                        @if($sala->id === $ora->room_id)
                                            {{ $sala->nume }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                          @endif
                    @endforeach
                    
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
        @foreach ($news as $noutate)
                <img src="{{$noutate->link_imagine}}" style="width: 100%" class="img-responsive margin">
                <h2>
                {{$noutate->titlu}}
                </h2>
                <blockquote>
                  {!! $noutate->text !!}
                </blockquote>
                @endforeach
        </div>

       <!-- <div class="col-sm-6 ">
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
        </div>-->
    </div>
    </div>
</div>
</div>

</body>
</html>
