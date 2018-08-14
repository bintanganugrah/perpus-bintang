<?php
	include_once("config.php");
	$query = mysqli_query($mysqli, "SELECT * FROM buku WHERE id='$id'");
	$data = $query->fetch_assoc();

if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tahun_terbit_upd = $_POST['tahun_terbit_upd'];
	$id_penulis_upd = $_POST['id_penulis_upd'];
	$id_penerbit_upd = $_POST['id_penerbit_upd'];
	$id_kategori_upd = $_POST['id_kategori_upd'];
	$sinopsis_upd = $_POST['sinopsis_upd'];
	$sampul_upd = $_POST['sampul_upd'];

	$result = mysqli_query($mysqli, "UPDATE buku SET
										id='$id',	
										nama='$nama',
										tahun_terbit='$tahun_terbit',
										id_penulis='$id_penulis',
										id_penerbit='$id_penerbit',
										id_Kategori='$id_kategori',
										sinopsis='$sinopsis',
										sampul='$sampul'
										WHERE 
										id='id'
										");

	header('Location: index.php');
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "UPDATE * FROM buku WHERE id=$id");
while ($user_data = mysqli_fetch_array($result)) {
	$nama = $user_data['nama'];
	$tahun_terbit = $user_data['tahun_terbit'];
	$id_penulis = $user_data['id_penulis'];
	$id_penerbit = $user_data['id_penerbit'];
	$id_kategori = $user_data['id_kategori'];
}
	?>