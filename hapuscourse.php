<?php 
include 'connect.php';
$id=$_GET['id'];
$query = mysql_query("DELETE FROM course where id='$id'") or die (mysql_error());
if($query)
	header("location: tabelcourse.php"); 
else
	echo "GAGAL DIHAPUS";
?>