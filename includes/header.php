<?php 
error_reporting(0);
session_start();
include "./config/global.php";

?>

<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tire Info Search</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script>
		var home = "<?php echo HOME_URL ?>";
	</script>
</head>
<body class="tg-home">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<strong class="tg-logo">
				<a href="index.php"><img src="images/logo.png" alt="image description"></a>
			</strong>
			<div class="tg-rightarea">
				<nav id="tg-nav" class="tg-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="tg-navigation">
						<ul>
							<li class="active">
								<a href="./">Home</a>
							</li>
							<li>
								<a href="#">Dashboard</a>
								<ul>
									
								<?php if (isset($_SESSION["username"])): ?>
									<li>
										<a href="profile.php">User Profile</a>
									</li>
									<li>
										<a href="logout.php">Log Out</a>
									</li>
								<?php else: ?>
									<li>
										<a href="./">Login</a>
									</li>
								<?php endif ?>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->