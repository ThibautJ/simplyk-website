<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Beex Website</title>
	<!--fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Slabo+27px' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Simplyk">
	<meta name="application-name" content="Simplyk">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>

<body>
	<?php include("navbar.php"); ?>

	<div class="container-fluid equipe">
		<h3 class="sous-titre text-center">L'équipe</h3>
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="panel panel-default panel-profile">
					<div id="francois-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
						<img src="images/francois.jpg" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Francois</h3>
							<p>CEO</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="panel panel-default panel-profile">
					<div id="alix-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
						<img src="images/alix.jpg" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Alix</h3>
							<p>Co-founder</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="panel panel-default panel-profile">
					<div id="thibaut-heading" class="panel-heading"></div>
					<div class="panel-body text-center">
						<img src="images/thibaut.jpg" class="img-responsive center-block img-portrait">
						<div class="caption">
							<h3>Thibaut</h3>
							<p>CTO</p>
							<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="space"></div>
			<div class="row">
			<div class="col-sm-6 col-md-4">
					<div class="panel panel-default panel-profile">
						<div id="shayan-heading" class="panel-heading"></div>
						<div class="panel-body text-center">
							<img src="images/shayan.jpg" class="img-responsive center-block img-portrait">
							<div class="caption">
								<h3>Shayan</h3>
								<p>Co-founder</p>
								<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="panel panel-default panel-profile">
						<div id="nivit-heading" class="panel-heading"></div>
						<div class="panel-body text-center">
							<img src="images/nivit.jpg" class="img-responsive center-block img-portrait">
							<div class="caption">
								<h3>Nivit</h3>
								<p>Designer</p>
								<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="panel panel-default panel-profile">
						<div id="alex-heading" class="panel-heading"></div>
						<div class="panel-body text-center">
							<img src="images/alex.jpg" class="img-responsive center-block img-portrait">
							<div class="caption">
								<h3>Alex</h3>
								<p>On ne le connait pas</p>
								<p><a href="#" class="btn btn-primary" role="contact">Contact</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include("footer.php"); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-71659502-1', 'auto');
	ga('send', 'pageview');

</script>
