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
	<link rel="stylesheet" type="text/css" href="/css/sidenavLeft.css">
	<link rel="stylesheet" type="text/css" href="/css/sidenavRight.css">


</head>
<body>
	<div id="mainLeft">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FiiBook</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Orar <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Noutăți</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">(Username) <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Profilul meu</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br><br><br>
		<div class="row">
			<div class="col-md-6">
				<!-- side bar LEFT -->
				<div id="mySidenavLeft" class="sidenavLeft">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNavLeft()">&times;</a>
					<a href="#">About</a>
					<a href="#">Services</a>
					<a href="#">Clients</a>
					<a href="#">Contact</a>
				</div>

				<span style="font-size:30px;cursor:pointer;margin:30px;" onclick="openNavLeft()">&#9776;Deadline</span>
			</div>
		<div class="col-md-6 rigth" style="text-align: right;">
			<!-- side bar RIGHT -->
			<div id="mySidenavRight" class="sidenavRight">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNavRight()">&times;</a>
				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Clients</a>
				<a href="#">Contact</a>
			</div>
		<span style="font-size:30px;cursor:pointer;margin:30px;" onclick="openNavRight()">Noutăți&#9776;</span>
		</div>
	</div>
<div class="container">
<p> Here come dat continut </p><br>
</div>
</div>
<script>
	function openNavLeft() {
		document.getElementById("mySidenavLeft").style.width = "250px";
		document.getElementById("mainLeft").style.marginLeft = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}
	function openNavRight() {
		document.getElementById("mySidenavRight").style.width = "250px";
		document.getElementById("mainLeft").style.marginRight = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}
	function closeNavLeft() {
		document.getElementById("mySidenavLeft").style.width = "0";
		document.getElementById("mainLeft").style.marginLeft= "0";
		document.body.style.backgroundColor = "white";
	}
	function closeNavRight() {
		document.getElementById("mySidenavRight").style.width = "0";
		document.getElementById("mainLeft").style.marginRight= "0";
		document.body.style.backgroundColor = "white";
	}
</script>
</body>
</html>