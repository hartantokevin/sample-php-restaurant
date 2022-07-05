<?php
	include "connect.php";
	session_start();
	if (isset($_SESSION['username']))
	{
		header ("location:index.php");
	}
?>

<html>
	<head>
		<title>Sign In</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body style="background-image:url(images/home4.jpg)">
    <div class="container">
        <div class="card card-container">
            <form class="form-signin" method="post" name="login" action="proccess.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Name" required>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
            </form>
			Have an account already?
            <a href="login.php" class="forgot-password">
                Sign In
            </a>
        </div>
    </div>
	</body>
</html>