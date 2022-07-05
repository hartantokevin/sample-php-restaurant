<?php
	include 'connect.php';
	$id = $_GET['id'];
	$perintah = "SELECT * FROM course WHERE id='".$id."'";
	$query = mysql_query($perintah);
	$row = mysql_fetch_array($query)
?>
<html>
	<head>
		<title>Update Course</title>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body style="background-image:url(images/home4.jpg)">
    <div class="container">
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card">Three Madison Restaurant</p>
            <form class="form-signin" method="post" name="login" action="proccessupdatecourse.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="nama" class="form-control" placeholder="Nama Course" value="<?php echo $row['name']; ?>">
                <input type="text" name="desc" class="form-control" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>">
                <input type="text" name="chef" class="form-control" placeholder="Nama Chef" value="<?php echo $row['chef']; ?>">
                <select class="form-control" name="kat">
					<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
					<option value="main">Main</option>
					<option value="vege">Vege</option>
					<option value="dessert">Dessert</option>
				</select><br/>
				<input type="number" name="stok" class="form-control" placeholder="Stok" value="<?php echo $row['stok']; ?>"><br/>
                <input type="checkbox" name="updatefoto" value="false">  Change Picture</input>
                <input type="file" name="foto"><br/>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Update</button>
            </form>
				<button class="btn btn-lg btn-primary btn-block btn-signin" onclick="location.href='tabelcourse.php'">Cancel</button>

        </div>
    </div>
	</body>
</html>
<?php
	include 'connect.php';
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$desc = $_POST['desc'];
	$chef = $_POST['chef'];
	$kat = $_POST['kat'];
	$stok = $_POST['stok'];
	if(isset($_POST['updatefoto'])){ 
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "images/".$fotobaru;
		if(move_uploaded_file($tmp, $path)){
			$perintah = "SELECT * FROM course WHERE id='".$id."'";
			$query = mysql_query($perintah); 
			$data = mysql_fetch_array($query);
			if(is_file("images/".$data['foto']))
				unlink("images/".$data['foto']);
			$perintah = "UPDATE course SET name='".$nama."', deskripsi='".$desc."', chef='".$chef."', category='".$kat."', stok='".$stok."', foto='".$fotobaru."' WHERE id='".$id."'";
			$query = mysql_query($perintah); 
			if($query)
				echo "<script>alert('UPDATE SUKSES');location='tabelcourse.php';</script>";
			else
				echo "<script>alert('UPDATE GAGAL');</script>";
		}
		else
			echo "<script>alert('UPDATE GAMBAR GAGAL');location='tabelcourse.php';</script>";
	}
	else {
		$perintah = "UPDATE course SET name='".$nama."',deskripsi='".$desc."',chef='".$chef."',category='".$kat."', stok='".$stok."' WHERE id='".$id."'";
		$query = mysql_query($perintah);
		if($query)
			echo "<script>alert('UPDATE SUKSES');location='tabelcourse.php';</script>";
		else
			echo "<script>alert('UPDATE GAGAL');</script>";
	}
?>