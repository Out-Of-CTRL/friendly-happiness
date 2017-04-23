<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  <title> Profil </title>

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
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->prenume }}<span class="caret"></span></a>
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
		<br><br><br><br><br>
	<div class="container">
		















































































<div class="container">
    <h1>Modifică profilul</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        

        <form class="form-horizontal" role="form" method="POST" action="{!! action('ModUserController@update', ['id' => Auth::User()->id]) !!}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('nume') ? ' has-error' : '' }}">
            <label for="nume" class="col-lg-3 control-label">Nume:</label>
            <div class="col-lg-8">
            	<?php  $prevNume = Auth::user()->nume; ?>
              	<input id="nume" class="form-control" name="nume" type="text" value={{ $prevNume }} > 
            
				@if( $errors->has('nume'))
                        <span class="help-block">
                        <strong>{{ $errors->first('nume') }}</strong>
                    </span>
                @endif

            </div>
          </div>
        


          <div class="form-group{{ $errors->has('prenume') ? ' has-error' : '' }}">
            <label for="prenume" class="col-lg-3 control-label">Prenume:</label>
            <div class="col-lg-8">
            	 
            	<?php  $prevPrenume = Auth::user()->prenume; ?>
             	<input id="prenume" class="form-control" name="prenume" type="text" value={{ $prevPrenume }}>

            	@if( $errors->has('prenume'))
                        <span class="help-block">
                        <strong>{{ $errors->first('prenume') }}</strong>
                    </span>
                @endif

            </div>
          </div>



          <div class="form-group{{ $errors->has('grupa') ? ' has-error' : '' }}">
            <label for="grupa" class="col-lg-3 control-label">An și grupă:</label>
            <div class="col-lg-8">
              	<?php  $prevGrupa = Auth::user()->grupa; ?>
              	<input id="grupa" class="form-control" name="grupa" type="text" value={{ $prevGrupa }}>
            
              	@if( $errors->has('grupa'))
                        <span class="help-block">
                        <strong>{{ $errors->first('grupa') }}</strong>
                    </span>
                @endif

            </div>
          </div>



          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              	<?php  $prevEmail = Auth::user()->email; ?>
              	<input id="email" class="form-control" name="email" type="text" value={{ $prevEmail }}>
            	
            	@if( $errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
          </div>



          <div class="form-group{{ $errors->has('matricol') ? ' has-error' : '' }}">
            <label for="matricol" class="col-md-3 control-label">Număr matricol:</label>
            <div class="col-md-8">
              	<?php  $prevMatricol = Auth::user()->matricol; ?>
              	<input id="matricol" class="form-control" name="matricol" type="text" value={{ $prevMatricol }}>
           		
           		@if( $errors->has('matricol'))
                        <span class="help-block">
                        <strong>{{ $errors->first('matricol') }}</strong>
                    </span>
                @endif

            </div>
          </div>



          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
            	<?php  $prevPassword1 = Auth::user()->password; ?>
              <input class="form-control" type="password" value={{ $prevPassword1 }}>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
            	<?php  $prevPassword2 = Auth::user()->password; ?>
              <input class="form-control" type="password" value={{ $prevPassword2 }}>

              
              @if( $prevPassword1 != $prevPassword2 )
              
              	<?php $prevPassword1 = Auth::user()->password; ?>
                <span class="help-block">
                    <strong>{{ $errors->first('matricol') }}</strong>
                </span>
              
              @endif

            </div>
          </div>

         <?php 
            		$idLogat = Auth::user()->id;	

                      foreach ($users as $individ) 
                      {
                        # code...
                        if($individ->id === $idLogat)
                         {
                         	$individ->nume = $prevNume;
                         	$individ->prenume = $prevPrenume; 
                         	$individ->grupa = $prevGrupa;
                         	$individ->matricol = $prevMatricol;
                         	$individ->email = $prevEmail;
                         	$individ->password = $prevPassword1;
                         	#$individ->save();

                         }
                      }
                      #moduser.update($individ);
         ?>
                    



          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
					<button type="submit" class="btn btn-primary">
                        Salvează
                    </button>


              
              <span></span>
              <input type="reset" class="btn btn-default" value="Renunță">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>




<!--<form class="form-horizontal" role="form" method="POST" action="{!! action('ModUserController@update', ['id' => Auth::User()->id]) !!}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nume') ? ' has-error' : '' }}">
                            <label for="nume" class="col-md-4 control-label">nume</label>

                            <div class="col-md-6">
                                <input id="nume" type="nume" class="form-control" name="nume" value="{{ old('nume') }}" required autofocus>

                                @if ($errors->has('nume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenume') ? ' has-error' : '' }}">
                            <label for="prenume" class="col-md-4 control-label">ID Titular</label>

                            <div class="col-md-6">
                                <input id="prenume" type="prenume" class="form-control" name="prenume" required>

                                @if ($errors->has('prenume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenume') }}</strong>
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

-->












































































































		<div class="row">
			<table class="table table-striped table-hover table-bordered" >
				<h1 style="text-align: center;">Rezultate obținute</h1>
				<br>
			  <thead class="black_theme">
			    <tr>
			      <th>Materie</th>
			      <th>Medie</th>
			      <th>Credite</th>
			      <th>Puncte</th>
			    </tr>
			  </thead>
			  <tbody>
        @foreach ($courses as $materie)
			    <tr>
			      <td>{{$materie->materie}}</td>
			      <td>
           <?php
          $suma='0';
          $counter='0';
          foreach($grades as $nota)
          {
            if ($nota->course_id == $materie->id)
            {
              $suma=$suma+$nota->val;
              $counter++;
            }
          }
          if($counter > 0)
          $medie=$suma/$counter;
          else
          $medie='0';
          echo $medie;
           ?>
          
            </td>
			      <td>{{$materie->nr_credite}}</td>
			      <td>
           <?php
           $punctaj=$medie*$materie->nr_credite;
           echo $punctaj;
           ?>   
            </td>
			    </tr>
			  </tbody>
        @endforeach
			</table> 
		</div>
	</div>
	<br><br><br><br>
</body>
</html>