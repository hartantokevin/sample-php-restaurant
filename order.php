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

	<section id="fh5co-home" data-section="home" style="background-image: url(images/PP.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
	</section>
	</body>
</html>
<?php
	include 'connect.php';
	session_start();
	$code = $_GET['code'];
	$perintahNama = "SELECT * FROM course WHERE id='".$code."'";
	$queryNama = mysql_query($perintahNama);
	while ($row = mysql_fetch_array($queryNama))
		$namec = $row['name'];
	
	$username = $_SESSION['username'];
	$perintahUser = "SELECT * FROM user WHERE username='".$username."'";
	$queryUser = mysql_query($perintahUser);
	while ($row = mysql_fetch_array($queryUser))
	{
		$username = $row['username'];
		$name = $row['name'];
	}
	$perintah = "CALL pesanprocedure('".$namec."','".$username."','".$name."')";
	$query = mysql_query($perintah); 
	if($query)
		echo "<script>alert('ORDER ANDA SUKSES');location='index1.php#fh5co-intro';</script>";
	else
		echo "<script>alert('ORDER ANDA TIDAK VALID');</script>";
?>