<html>
	<head>
		<title>Sign In</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body style="background-image:url(images/home4.jpg)">
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="images/login.jpg"/>
            <p id="profile-name" class="profile-name-card">Three Madison Restaurant</p>
            <form class="form-signin" method="post" name="login" action="action.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign In</button>
            </form>
			Don't have an account?
            <a href="signup.php" class="forgot-password">
                Sign Up
            </a>
        </div>
    </div>
	</body>
</html>
<?php
	session_start();
	include 'connect.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("select * from user where username='$username' and password='$password'");
	$xxx=mysql_num_rows($query);
	
	if ($xxx==TRUE)
	{
		$_SESSION['username']=$username;
		if($username==admin)
			header("location:tabelcourse.php");
		else
			header("location:index1.php");
	}
	else
		echo "<script>alert('Username atau Password Salah');location='login.php';</script>";
?>