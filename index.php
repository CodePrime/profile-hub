<!DOCTYPE html>
<html>
<head>
	<title>Tom's Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--core Bootstrap CSS-->
 	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 	<!--Font Awesome-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
		<button type="button" class="btn btn-primary btn-large btn-main" id="btn1">More About Me</button></a>
		<a href="#skills-section"><button type="button" class="btn btn-primary btn-large btn-main" id="btn2">Skills and Qualities</button></a>
	</div>
</header>

<div class="container" id="skills-section">
	<div class="row">
		<div class="col-md-6 col-sm-6 no-gutter">
			<div class="skills-1">
			<h1>Web<br />Design</h1>
			<h2>Simple porfolio pages or<br />business fronts</h2>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 no-gutter">
			<div class="skills-2">
			<h1>Technical<br />Writing</h1>
			<h2>Literally the next Shakespear</h2>
			</div>
		</div>
	</div>
</div>

<div class="container" id="resume">
	<div class="row">
		<div class="resume-inner">
		<h1>MY RESUME</h1>
		<p>Hire me I'm poor</p>
		<i class="fa fa-arrow-down resume-arrow"></i>
			<div class="resume-btn-container">
				<button type="button" class="btn btn-default btn-large btn-resume">Resume</button>
			</div>
		</div>
	</div>
</div>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>