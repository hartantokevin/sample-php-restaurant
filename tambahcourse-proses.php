<?php
	include 'connect.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$deskripsi = $_POST['deskripsi'];
	$chef = $_POST['chef'];
	$category = $_POST['category'];
	$stok = $_POST['stok'];
	$foto = $_POST['foto'];
	$query = mysql_query("INSERT INTO course VALUES ('$id','$name','$deskripsi','$chef','$category', '$stok', '$foto')") or die(mysql_error());
	if($query)
		header("location: tabelcourse.php"); 
	else
		echo "TAMBAH GAGAL";
?>