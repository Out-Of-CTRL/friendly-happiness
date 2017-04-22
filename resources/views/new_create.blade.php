<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta titlu="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="sidenavLeft.css">
    <link rel="stylesheet" type="text/css" href="sidenavRight.css">
</head>
<body>
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
                        <li><a href="/group/create">Creare Grup</a></li>
                        <li><a href="/course/create">Creare Curs</a></li>
                        <li><a href="/room/create">Creare Sala</a></li>
                        <li><a href="/grade/create">Introducere note</a></li>
                        <li><a href="/event/create">Creare Eveniment</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->prenume }}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/profil">Profilul meu</a></li>
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
    <br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Creaare Noutati</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('room.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('titlu') ? ' has-error' : '' }}">
                            <label for="titlu" class="col-md-4 control-label">Titlu</label>

                            <div class="col-md-6">
                                <input id="titlu" type="titlu" class="form-control" name="titlu" value="{{ old('titlu') }}" required autofocus>

                                @if ($errors->has('titlu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titlu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('link_imagine') ? ' has-error' : '' }}">
                            <label for="link_imagine" class="col-md-4 control-label">Link imagine</label>

                            <div class="col-md-6">
                                <input id="link_imagine" type="link_imagine" class="form-control" name="link_imagine" value="{{ old('link_imagine') }}">

                                @if ($errors->has('link_imagine'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link_imagine') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Text</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="text" value="{{ old('text') }}">

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Trimite
                                </button>
                            </div>
                        </div>

                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

