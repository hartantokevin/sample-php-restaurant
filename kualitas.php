<!DOCTYPE html>
<html>
<head>
	<title>Three Madison</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<h5 style='color:#6a6868'>
<a href="tabelcourse.php">Tabel Course</a> / <a href="tabelchef.php">Tabel Chef</a> / 
<a href="tabelpesan.php">Tabel Pesan</a> / <a href="kualitas.php">Kualitas</a> / 
<a href="backup.php">Back Up</a> / <a href="logout.php">Log Out</a>
</h5>
<br/>
<?php 
	include 'connect.php';
	$query = mysql_query("SELECT COUNT(*) from pelanggan WHERE rating>=(SELECT AVG(rating) from pelanggan)");
	if(mysql_num_rows($query)>0)
	{
		$row = mysql_fetch_array($query);
		$puas = $row['COUNT(*)'];
	}
	$query2 = mysql_query("SELECT COUNT(*) from pelanggan");
	if(mysql_num_rows($query2)>0)
	{
		$row2 = mysql_fetch_array($query2);
		$total = $row2['COUNT(*)'];
	}
	if($puas>=0.7*$total) echo '<h3> Michelin 3-star</h3>';
	else if($puas>=0.4*$total) echo 'Michelin 2-star';
	else echo 'Michelin 1-star';
?>
</body>
</html>