<html>
	<head>
		<title>Tambah Course</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body style="background-image:url(images/home4.jpg)">
    <div class="container">
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card">Three Madison Restaurant</p>
            <form class="form-signin" method="post" name="login" action="tambahcourse-proses.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="id" class="form-control" placeholder="ID">
                <input type="text" name="name" class="form-control" placeholder="Nama Course">
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                <input type="text" name="chef" class="form-control" placeholder="Nama Chef">
				<select class="form-control" name="category">
					<option value="">Choose Category</option>
					<option value="main">Main</option>
					<option value="vege">Vege</option>
					<option value="dessert">Dessert</option>
				</select><br/>
				<input type="number" name="stok" class="form-control" placeholder="Stok"><br/>
				<input type="file" name="foto"><br/>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Tambah</button>
            </form>
				<button class="btn btn-lg btn-primary btn-block btn-signin" onclick="location.href='tabelcourse.php'">Cancel</button>

        </div>
    </div>
	</body>
</html>