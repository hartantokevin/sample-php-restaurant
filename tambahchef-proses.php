<?php
	include 'connect.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$query = mysql_query("INSERT INTO chef VALUES ('$id','$name')") or die(mysql_error());
	if($query)
		header("location: tabelchef.php"); 
	else
		echo "TAMBAH GAGAL";
?>