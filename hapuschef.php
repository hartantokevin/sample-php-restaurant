<?php 
include 'connect.php';
$id=$_GET['id'];
$query = mysql_query("DELETE FROM chef where id='$id'") or die (mysql_error());
if($query)
		header("location: tabelchef.php"); 
	else
		echo "GAGAL DIHAPUS";
?>