<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

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
  <h3 style="text-align:center;">Cât a trecut din anul universitar:<p id="PRC"></p></h3>
  <div class="progress progress-info">
    <div class="bar progress-bar-striped active progress-bar" role="progressbar" style="width"></div>
  </div>
</div>

	<script>
	var start = new Date(2016, 10, 1), end = new Date(2017, 6, 1), today = new Date(), 
    p = Math.round(((today - start) / (end - start)) * 100) + '%';
	// Update the progress bar
	$('.bar').css("width", p);
	document.getElementById("PRC").innerHTML = p;
	</script>
<div class="row set_margin"	>
	<div class="col-sm-2">
			<!-- Aici nu trebuie nimic -->
	</div>
	<div class="col-sm-8">
			<table class="table table-striped table-hover table-bordered" >
				<h1 style="text-align: center;">Orarul complet</h1>
				<br>
			  <thead class="black_theme">
			    <tr>
			      <th>Zi</th>
			      <th>8:00 - 10:00</th>
			      <th>10:00 - 12:00</th>
			      <th>12:00 - 14:00</th>
			      <th>14:00 - 16:00</th>
			      <th>16:00 - 18:00</th>
			      <th>18:00 - 20:00</th>
			    </tr>
			  </thead>
			  <tbody>
			  <tr>
			  	<td>
			  		Luni
			  	</td>
			  	<td>
			  		 @foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '08:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '10:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '12:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '14:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '16:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			      	
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-03')
			      	 @if($ora->hour === '18:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	</tr>




			  	<tr>
			  	<td>
			  	Marti
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '08:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '10:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '12:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '14:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '16:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-04')
			      	 @if($ora->hour === '18:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	</tr>





			  	<tr>
			  	<td>
			  	Miercuri
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '08:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '10:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '12:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '14:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '16:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-05')
			      	 @if($ora->hour === '18:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	</tr>





			  	<tr>
			  	<td>
			  	Joi
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '08:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '10:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '12:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '14:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '16:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-06')
			      	 @if($ora->hour === '18:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	</tr>





			  	<tr>
			  	<td>
			  	Vineri
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '08:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '10:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '12:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '14:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '16:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach
			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	<td>
			  		@foreach ($events as $ora)
			   		 @if($ora->date === '2017-04-07')
			      	 @if($ora->hour === '18:00:00')
			      		@foreach($courses as $curs)
			      		@if($curs->id === $ora->course_id)
			      		{{ $curs->materie }}
			      		@endif
			      		@endforeach

			      	@endif
			      	@endif
			      	@endforeach
			  	</td>
			  	</tr>
			

			  </tbody>
			</table> 
	</div>
	<div class="col-sm-2">
			<!-- Aici nu trebuie nimic -->
	</div>
</div>
</body>
</html>