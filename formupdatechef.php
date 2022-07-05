<?php
	include 'connect.php';
	$id = $_GET['id'];
	$perintah = "SELECT * FROM chef WHERE id='".$id."'";
	$query = mysql_query($perintah);
	$row = mysql_fetch_array($query)
?>
<html>
	<head>
		<title>Update Chef</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body style="background-image:url(images/home4.jpg)">
    <div class="container">
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card">Three Madison Restaurant</p>
            <form class="form-signin" method="post" name="login" action="proccessupdatechef.php?id=<?php echo $id; ?>">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="nama" class="form-control" placeholder="Name Course" value="<?php echo $row['name']; ?>">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Update</button>
            </form>
				<button class="btn btn-lg btn-primary btn-block btn-signin" onclick="location.href='tabelcourse.php'">Cancel</button>

        </div>
    </div>
	</body>
</html>