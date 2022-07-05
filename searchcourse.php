<!DOCTYPE html>
<html>
<head>
	<title>Three Madison</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<a href="tabelcourse.php">Tabel Course</a> / <a href="tabelchef.php">Tabel Chef</a> / <a href="tambahcourse.php">Tambah Course</a> / <a href="logout.php">Log Out</a> / 
<form method="post" action="searchcourse.php">
	<input type="text" placeholder="Search..." name="cari" size="35">
	<input type="submit" value="Search">
</form>
<?php 
	include 'connect.php';
	$cari = $_POST['cari'];
	$query = mysql_query("SELECT * from course WHERE MATCH (name,deskripsi,chef) AGAINST ('$cari')");
	echo '
	<table border="1" cellpadding="2" cellspacing="2">
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
	if(mysql_num_rows($query)>0)
	{
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
	}
	else
		echo '<tr><td colspan="8"><center>No Result(s)</center></td></tr>';

	echo'
	</tbody>
	</table>';
?>
</body>
</html>