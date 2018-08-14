<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="stylesheet" type="text/css" href="per.css">
</head>
<body>
	<nav>
			<ul id="float">
				<li><a href="form.html">Daftar Buku</a></li>
				<li><a href="add.php">Tambah Buku</a></li>
			</ul>
		</nav>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="" method="post">
		<table width="25%" border="0">
			<tr>
				<td>ID Buku</td>
				<td><input type="text" name="id"></td>
			</tr><tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama"></td>
			</tr><tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit"></td>
			</tr><tr>
				<td>ID Penulis</td>
				<td><input type="text" name="id_penulis"></td>
			</tr><tr>
				<td>ID Penerbit</td>
				<td><input type="text" name="id_penerbit"></td>
			</tr><tr>
				<td>ID Kategori</td>
				<td><input type="text" name="id_kategori"></td>
			</tr><tr>
				<td>Sinopsis</td>
				<td><input type="text" name="sinopsis"></td>
			</tr><tr>
				<td>Sampul</td>
				<td><input type="text" name="sampul"></td>
			</tr><tr>
				<td>Berkas</td>
				<td><input type="text" name="berkas"></td>
			</tr><tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$id_penulis = $_POST['id_penulis'];
	$id_penerbit = $_POST['id_penerbit'];
	$id_kategori = $_POST['id_kategori'];
	$sinopsis = $_POST['sinopsis'];
	$sampul = $_POST['sampul'];
	$berkas = $_POST['berkas'];

	include 'config.php';

	$result = mysqli_query($mysqli, "INSERT INTO buku(
													id,
													nama,
													tahun_terbit,
													id_penulis,
													id_penerbit,
													id_Kategori,
													sinopsis,
													sampul,
													berkas)	 
								       				VALUES(
													'$id',
													'$nama',
													'$tahun_terbit',
													'$id_penulis',
													'$id_penerbit',
													'$id_kategori',
													'$sinopsis',
													'$sampul',
													'$berkas')");
	echo "User added successfully. <a href='index.php'>View Users</a>";
}
	?>
</body>
</html>