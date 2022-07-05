<!DOCTYPE html><html><head>	<title>Three Madison</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<center><body background="bg.jpg"><h5><a href="tabelcourse.php" class="white">Tabel Course</a> / <a href="tabelchef.php" class="white">Tabel Chef</a> / <a href="tambahcourse.php" class="white">Tambah Course</a> / <a href="tabelpesan.php" class="white">Tabel Pesan</a> /<a href="kualitas.php" class="white">Kualitas</a> / <a href="backup.php" class="white">Back Up</a> / <a href="logout.php" class="white">Log Out</a></h5>
<form method="post" action="searchcourse.php">
	<input type="text" placeholder="Search..." name="cari" size="35">
	<input type="submit" value="Search">
</form></center>
<?php 
	include 'connect.php';
	$query = mysql_query("SELECT * from course");

	echo '
	<center><table border="1" cellpadding="2" cellspacing="2">
			<thead>
				<tr>
					<th> ID </th>
					<th> Nama </th>
					<th> Deskripsi </th>
					<th> Chef </th>
					<th> Kategori </th>
					<th> Stok </th>
					<th> Foto </th>
					<th> Opsi </th>
				</tr>
			</thead>
		<tbody>';
	while ($row = mysql_fetch_array($query))
	{
		echo '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['deskripsi'].'</td>
				<td>'.$row['chef'].'</td>
				<td>'.$row['category'].'</td>
				<td>'.$row['stok'].'</td>
				<td>'.$row['foto'].'</td>
				<td><a href="formupdatecourse.php?id='.$row['id'].'">Edit</a> / <a href="hapuscourse.php?id='.$row['id'].'">Hapus</a></td>
				</tr>';
	}
	echo'
	</tbody>
	</table><center>';
?>
</body>
</html>