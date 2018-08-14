<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="per.css">
</head>
<body bgcolor="#00fa9a">
	 	<nav>
			<ul id="float">
				<li><a href="form.html">Daftar Buku</a></li>
				<li><a href="add.php">Tambah Buku</a></li>
			</ul>
		</nav>
<table align="center" height="500" width="400" cellpadding="20">
	<tr>
	<td>
	<b><font color="black" size="10">DAFTAR BUKU</font></b>
	<br><br><br><br><br>
	<input type="text" name="nama" size="20"
	placeholder="Nama Depan">
	<input type="text" name="nama" size="20"
	placeholder="Nama Belakang"><br><br>
	<input type="text" name="email" size="46"
	placeholder="Email Anda"><br><br>
	<input type="text" name="alamat" size="46"
	placeholder="Masukan Alamat Anda"><br><br>
	<input type="text" name="telepon" size="46"
	placeholder="Telepon Anda"><br><br>
	<p><b>Status Aktif</b></p>
	<select name="">
		<option value="Aktif">Aktif</option>
		<option value="Tidak Aktif">Tidak Aktif</option>>
	</select><br><br>
	<input type="radio" name="Kelamin" value="L">Laki-laki
	<input type="radio" name="Kelamin" value="P">Perempuan<br><br>
	<input type="submit" name="submit" value="Submit">
</table>
<?php
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];

	include 'config.php';

	$result = mysqli_query($mysqli, "INSERT INTO anggota(
													id,
													nama,
													alamat,
													email,
													telepon,
								       				VALUES(
													'$id',
													'$nama',
													'$alamat',
													'$email',
													'$telepon',)");
}
?>
</body>
</html>