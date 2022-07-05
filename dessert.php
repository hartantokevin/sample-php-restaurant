<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Three Madison Restaurant</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index1.php">Three Madison</a> 
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2" id="navbar">
							<h1 class="to-animate"><a href="#" data-nav-section="menu">Dessert Menu</a></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>
	
	<section id="fh5co-testimonials" data-section="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Menu</h2>
				</div>
			</div>
		</div>
	</section>
	
		<section id="fh5co-intro">
		<div class="container">
			<div class="row">
				<?php
					include 'connect.php';
					$query = mysql_query("SELECT *, course.id as idc, course.name as namec FROM course INNER JOIN chef ON course.chef=chef.id AND course.category='dessert'");
					while ($row = mysql_fetch_array($query)){
						$id = $row['idc'];
						$namec = $row['namec'];
						$desc = $row['deskripsi'];
						$chef = $row['name'];
						$foto = $row['foto'];
						echo
						'<div class="fh5co-block to-animate"  style="background-image: url(images/'.$foto.')">
							<div class="overlay-darker"></div>
							<div class="overlay"></div>
							<div class="fh5co-text">
								<div style="height:200px">
									<h2>'.$namec.'</h2>
									<p>'.$desc.'</p>
									<p>'.$chef.'</p>
								</div>
							</div>
						</div>';
					}
				?>
			</div>	
		</div>
	</section>
	
	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="main.php"><i>1</i></a></li>
						<li><a href="vegemain.php"><i>2</i></a></li>
						<li><a href="index1.php"><i class="icon-home"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>