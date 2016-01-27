<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Simplyk Website</title>
	<!--fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Slabo+27px' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">

	<!-- JS -->
	<!--<script type="text/javascript" src="js/changeForm.js"></script>-->


	<!-- octicons/fonticons -->
	<script src="https://use.fonticons.com/a977a97f.js"></script>
	<link rel="stylesheet" href="/octicons/octicons.css">

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

	<div id="first-section" class="section container-fluid">
		<div class="row">
			<div id="logo" class="col-md-8 col-md-offset-2">
				<img align="middle" src="images/simplyk.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center" id="vision">Let’s build an engaged society right now </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h4 class="text-center" id="mission">Tissons les liens d'un monde solidaire</h4>
			</div>
		</div>
	</div>

	<div id="description-section" class="container-fluid section">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h3 class="sous-titre text-center" id="titre-description-section">Citizen or organization</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h6 class="sous-titre2 text-center">Simplyk gives a fresh impulse to citizen involvement connecting good wills</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="btn-group"role="group" data-toggle="buttons" aria-label="...">
					<label id="citoyen-button-description" class="btn btn-default active btn-description">
						<input type="radio" name="options"  autocomplete="off" checked><i class="icon icon-sk  icon-user"></i>
						Citizen
					</label>
					<label id="organisme-button-description" class="btn btn-default btn-description">
						<input type="radio" name="options" autocomplete="off"><i class="icon icon-sk icon-university"></i>
						Organization
					</label>
				</div>
			</div>
		</div>
		<div id="description-list" class="row">
			<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-hand-o-up"></i><b>Find your mission</b> Filters to ease your mission research, according to your availabilities and interests (close to you).</div>
			<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-map-o"></i><b>Even if you have only a few hours</b> No more reason to miss an occasion to get involved, whether it is on a punctual or a regular basis.</div>
			<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-users"></i><b>Being in good company</b> Invite your friends to take part to your missions. Because the more, the merrier and the bigger the impact. </div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<button id="citoyen-register" class="btn btn-warning">Register !</button>
			</div>
		</div>
	</div>

	<div id="partners-section" class="section container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<h3 class="sous-titre text-center">Our partners</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 center-block img-partners"><a href="http://d3center.ca/"><img src="http://d3center.ca/wp-content/uploads/2015/06/District3-Innovation-Center.png" class="img-responsive center-block"></a></div>
			<div class="col-md-4 center-block img-partners"><a href="http://cabm.net/en"><img src="https://pbs.twimg.com/profile_images/593854999202955264/xvNlID33.jpg" class="img-responsive center-block"></a></div>
			<div class="col-md-4 center-block img-partners"><a href="http://volunteerwica.com/accueuil/"><img src="http://volunteerwica.com/wp-content/themes/bhinneka-child/img/logofr.png" class="img-responsive center-block"></a></div>
			<!--<div class="col-md-3 center-block img-partners"><a href="https://www.concordia.ca/"><img src="http://5days.ca/concordia/wp-content/uploads/sites/25/2014/03/Concordia_Logo2.png" class="img-responsive center-block"></a></div>-->
		</div>
	</div>


	<div id="register-section" class="section container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h3 class="sous-titre text-center">Be up-to-date</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div class="center-block loupe">
					<h3>Missions and volunteers ready to be matched through our interactive map</h3>
					<img id="loupe" src="images/map-platform.png" class="img-responsive img-thumbnail">
				</div>
			</div>
			<div class="col-md-4 col-md-offset-2 form-wufoo">
				<div class="btn-group btn-group-justified" id="btn-group-register" role="group" data-toggle="buttons" aria-label="...">
					<label id="citoyen-button" class="btn btn-default active">
						<input type="radio" name="options"  autocomplete="off" checked><i class="icon icon-sk  icon-user"></i>   Citizen
					</label>
					<label id="organisme-button" class="btn btn-default">
						<input type="radio" name="options" autocomplete="off"><i class="icon icon-sk icon-university"></i>   Organization
					</label>
				</div>
				<div id="php-form"><?php include("form-cit.php"); ?></div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


  <!--<div id="video-section" class="section">
    <h3 class="sous-titre text-center">Vidéo de présentation</h3>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="center-block"><iframe width="560" height="315" align="middle" class="center-block thumbnail" src="https://www.youtube.com/embed/GgUCo700JUw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
      <div class="col-md-2"></div>
    </div>
</div>-->

<?php include("footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- jQuery -->
<script src="js/my-jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>

<!-- SCRIPTS-->

<!-- Script GoogleAnalytics-->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-71659502-1', 'auto');
	ga('send', 'pageview');

</script>
