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
					<a class="navbar-brand" href="home">FiiBook</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="orar">Orar <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Noutăți</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->prenume }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="profil">Profilul meu</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br><br><br>
	<div class="container">
		<div class="row">
			<table class="table table-striped table-hover table-bordered" >
				<h1 style="text-align: center;">Profilul meu</h1>
				<br>
			  <thead class="black_theme">
			    <tr>
			      <th style="width:25%">#</th>
			      <th>Date</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Nume</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>Prenume</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>Adresa (webmail)</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>An</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>Grupa</td>
			      <td>Column content</td>
			    </tr>
			  </tbody>
			</table> 
		</div>
		<div class="row">
			<table class="table table-striped table-hover table-bordered" >
				<h1 style="text-align: center;">Rezultate obținute</h1>
				<br>
			  <thead class="black_theme">
			    <tr>
			      <th>An</th>
			      <th>Semestru</th>
			      <th>Puncte</th>
			      <th>Credite</th>
			      <th>Medie</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td rowspan="2">I</td>
			      <td>1</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>2</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td rowspan="2">II</td>
			      <td>1</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>2</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td rowspan="2">III</td>
			      <td>1</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			    <tr>
			      <td>2</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>
			  </tbody>
			</table> 
		</div>
	</div>
	<br><br><br><br>
</body>
</html>