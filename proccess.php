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
<?php
include "connect.php";
$name= $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($name)){
	echo "<script>alert('Nama belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}else
	if (empty($email)){
		echo "<script>alert('Email belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}else 
	if(empty($username)){
		echo "<script>alert('Username belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}else 
	if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}

else{
	$daftar = mysql_query("INSERT INTO user (name,email,username,password) values ('$name','$email','$username','$password')");
	if ($daftar){
		echo "<script>alert('Berhasil Mendaftar');document.location.href='login.php'</script>";
	}
}
?>


