<?php
$id = $_GET['id'];
include "config.php ";
$query = mysqli_query($mysqli, "SELECT * FROM buku WHERE id='$id'");
$data = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>

	<a href="index.php">Home</a>
	<br/><br/>

	<form method="post" action="index.php">
		<table border="0">
			<tr>
				<td>id</td>
				<td><input type="hidden" name="id" value="<?php echo $data['id']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Penulis</td>
				<td><input type="text" name="id_penulis" value="<?php echo $data['id_penulis']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="id_penerbit" value="<?php echo $data['id_penerbit']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Kategori</td>
				<td><input type="text" name="id_kategori" value="<?php echo $data['id_kategori']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Sinopsis</td>
				<td><input type="text" name="sinopsis" value="<?php echo $data['sinopsis']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Sampul</td>
				<td><input type="text" name="sampul" value="<?php echo $data['sampul']?>"></td>
			</tr>
			<tr>

			<tr>
				<td>Berkas</td>
				<td><input type="text" name="berkas" value="<?php echo $data['berkas']?>"></td>
			</tr>
			<tr>	

				<td><input type="submit" name="update" value="Update"></td>
		</table>
	</form>

</body>
</html>