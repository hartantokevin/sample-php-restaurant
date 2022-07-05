<?php 
include 'connect.php';
$id=$_GET['id'];
$query = mysql_query("DELETE FROM pesan where pesan='$id'") or die (mysql_error());
if($query)
		header("location: tabelpesan.php"); 
	else
		echo "GAGAL DIHAPUS";
?>