<!DOCTYPE html>
<html>
<head>
	<title>Three Madison</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body background="bg.jpg">
<center><h5><a href="tabelcourse.php" class="white">Tabel Course</a> / <a href="tabelchef.php" class="white">Tabel Chef</a> / <a href="tabelpesan.php" class="white">Tabel Pesan</a> / <a href="kualitas.php" class="white">Kualitas</a> / <a href="backup.php" class="white">Back Up</a> / <a href="logout.php" class="white">Log Out</a></h5><form method="post" action="searchcourse.php">
	<input type="text" placeholder="Search..." name="cari" size="35">
	<input type="submit" value="Search">
</form></center>
<?php 
	include 'connect.php';
	$query = mysql_query("SELECT * from pesan");

	echo '
	<center><table border="1" cellpadding="2" cellspacing="2">
			<thead>
				<tr>
					<th> Course Name </th>
					<th> Username </th>
					<th> Ordered By </th>
					<th> Opsi </th>
				</tr>
			</thead>
		<tbody>';		
	while ($row = mysql_fetch_array($query))
	{
		echo '<tr>
				<td>'.$row['nama'].'</td>
				<td>'.$row['username'].'</td>
				<td>'.$row['name'].'</td>
				<td><a href="hapuspesan.php?id='.$row['pesan'].'">Delete</a></td>
				</tr>';
	}
	echo'
	</tbody>
	</table><center>';
?>
</body>
</html>