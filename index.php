<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="per.css">
</head>
<body>
	<a href="add.php">
	<nav>
			<ul id="float">
				<li><a href="form.html">Daftar Buku</a></li>
				<li><a href="add.php">Tambah Buku</a></li>
			</ul>
		</nav>

<table width='80%' border=1>
	
	<tr>
		<th>ID Buku</th> <th>Nama Buku</th> <th>Tahun Terbit</th> <th>Penulis</th>
		<th>Penerbit</th> <th>Kategori</th> <th>Sinopsis</th> <th>Sampul</th> <th>Berkas</th>
	</tr>

<?php
while($user_data = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$user_data['id']."</td>";
	echo "<td>".$user_data['nama']."</td>";
	echo "<td>".$user_data['tahun_terbit']."</td>";
	echo "<td>".$user_data['id_penulis']."</td>";
	echo "<td>".$user_data['id_penerbit']."</td>";
	echo "<td>".$user_data['id_kategori']."</td>";
	echo "<td>".$user_data['sinopsis']."</td>";
	echo "<td>".$user_data['sampul']."</td>";
	echo "<td>".$user_data['berkas']."</td>";
	echo "<td><a href='edit.php?id=$user_data[id]'>edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>