<!DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<center><body background="bg.jpg">
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