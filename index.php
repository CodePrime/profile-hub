<!DOCTYPE html>
<html>
<head>
	<title>Tom's Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--core Bootstrap CSS-->
 	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!--Custom CSS-->
    <link href='style.css' rel="stylesheet" type='text/css'>

</head>
<body>
<!--navbar-->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"> </a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".mainNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse mainNav">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#">About me</a></li>
				<li><a href="#">Resume</a></li>
				<li><a href="#">Experiences</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Me <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="#">LinkedIn</a></li>
					<li><a href="mailto:tom..cpcr@gmail.com">E-mail</a></li>
					</ul>
				</li>
				</ul>
			</div>
		</div>
	</nav>
<!--navbar-->
<header>
	<div class="header-filler">
		<h1>WELCOME TO MY PROFILE</h1>
		<hr style="width:10%">
		<p>I hope you enjoy your stay! Check out everything about me below!</p>
		<div class="outer-portrait">
			<div class="portrait-container">
				
			</div>
		</div>
		<button type="button" class="btn btn-primary btn-large btn-main" id="btn1">My Skillz</button>
		<button type="button" class="btn btn-primary btn-large btn-main" id="btn2">My Personality</button>
	</div>
</header>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>