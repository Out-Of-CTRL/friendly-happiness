@extends('layouts.app2')

@section('content')

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FIIBook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

                    <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="utf-8"> 
                <link rel="stylesheet" type="text/css" href="styles.css">
                <link rel="stylesheet" type="text/css" href="sidenavLeft.css">
                <link rel="stylesheet" type="text/css" href="sidenavRight.css">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    FIIBook
                </div>

                <div class="links">
                    <a href="home">Note</a>
                    <a href="home">Cursuri</a>
                    <a href="home">Stiri</a>
                    |
                    <a href="home">Login</a>
                </div>
            </div>



@foreach ($users as $user)

    <table class="table table-striped table-hover table-bordered" >
                <h1 style="text-align: center;">Ultimele tale note </h1>
                <br>
              <thead class="black_theme">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Nume</th>
                  <th>Prenume</th>
                  <th>Data nașterii</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->nume }}</td>
                  <td>{{ $user->prenume }}</td>
                  <td>{{ $user->date_of_birth }}</td>
                </tr>
                <!--<tr>
                  <td>2</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Column content</td>
                  <td>Column content</td>
                  <td>Column content</td>
                </tr>-->
              </tbody>
            </table> 



@endforeach


        </div>
    </body>
</html>

@endsection