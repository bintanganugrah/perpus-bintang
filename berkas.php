<?php


$berkas_buku 			= $_FILES['berkas_buku_upd']['tmp_name'];
$gambar_sampul 			= $_FILES['gambar_sampul_upd']['tmp_name'];

$nama_file_sampul	 	= $_FILES['gambar_sampul_upd']['name'];
$nama_file_berkas 		= $_FILES['berkas_buku_upd']['name'];

$ukuran_file_sampul 	= $_FILES['gambar_sampul_upd']['size'];
$ukuran_file_berkas 	= $_FILES['berkas_buku_upd']['size'];

$tipe_file 				= $_FILES['gambar_sampul_upd']['type'];
$tipe_file_berkas 		= $_FILES['berkas_buku_upd']['type'];

$file_error_sampul 		= $_FILES['gambar_sampul_upd']['error'];
$file_error_berkas 		= $_FILES['berkas_buku_upd']['error'];


@ $baca_dir = opendir('temp/');
if (!$baca_dir) {
	mkdir('temp/', 0777);
	$letak_file_sampul = 'temp/'.$nama_file_sampul;
	$letak_file_berkas = 'temp/'.$nama_file_berkas;
} else {
	$letak_file_sampul = 'temp/'.$nama_file_sampul;
	$letak_file_berkas = 'temp/'.$nama_file_berkas;
}

closedir($baca_dir);





$id					= $_POST['id'];
$nama				= $_POST['id_nama'];
$tahun_terbit 		= $_POST['tahun_terbit'];
$id_penulis 		= $_POST['id_penulis'];
$id_penerbit 		= $_POST['id_penerbit'];
$id_kategori 		= $_POST['id_kategori'];
$sinopsis 			= $_POST['sinopsis_upd'];
$id_blm 			= $_POST['id_blm'];
$submit_ubah 		= $_POST['submit_ubah'];


include('index.php');

//jika file "sampul" ADA dan file "berkas" TIDAK ADA, maka file "berkas" TIDAK di update
if (file_exists($gambar_sampul) && !file_exists($berkas_buku)) {
	move_uploaded_file($gambar_sampul, $letak_file_sampul);
	mysqli_query($koneksi, "UPDATE buku SET
		id 				= '$id',
		nama 			= '$nama',
		tahun_terbit 	= '$tahun_terbit',
		id_penulis 		= '$id_penulis',
		id_penerbit 	= '$id_penerbit',
		id_kategori 	= '$id_kategori',
		sinopsis 		= '$sinopsis',
		sampul 			= '$nama_file_sampul'
		WHERE
		id 				= '$id_blm'");
//jika file "berkas" ADA dan file "sampul" TIDAK ADA, maka file "sampul" TIDAK di update
} elseif (file_exists($berkas_buku) && !file_exists($gambar_sampul)) {
	move_uploaded_file($berkas_buku, $letak_file_berkas);
	mysqli_query($koneksi, "UPDATE buku SET
		id 				= '$id',
		nama 			= '$nama',
		tahun_terbit 	= '$tahun_terbit',
		id_penulis 		= '$id_penulis',
		id_penerbit 	= '$id_penerbit',
		id_kategori 	= '$id_kategori',
		sinopsis 		= '$sinopsis',
		berkas 			= '$nama_file_berkas'
		WHERE
		id 				= '$id_blm'");
//jika file "berkas" dan file "sampul" ADA, maka keduanya di update
} elseif (file_exists($gambar_sampul) && file_exists($berkas_buku)) {
	move_uploaded_file($gambar_sampul, $letak_file_sampul);
	move_uploaded_file($berkas_buku, $letak_file_berkas);
	mysqli_query($koneksi, "UPDATE buku SET
		id 				= '$id',
		nama 			= '$nama',
		tahun_terbit 	= '$tahun_terbit',
		id_penulis 		= '$id_penulis',
		id_penerbit 	= '$id_penerbit',
		id_kategori 	= '$id_kategori',
		sinopsis 		= '$sinopsis',
		sampul 			= '$nama_file_sampul',
		berkas 			= '$nama_file_berkas'
		WHERE
		id 				= '$id_blm'");
//jika file "berkas" dan file "sampul" TIDAK ADA, maka keduanya TIDAK di update
} else {
	mysqli_query($koneksi, "UPDATE buku SET
		id 				= '$id',
		nama 			= '$nama',
		tahun_terbit 	= '$tahun_terbit',
		id_penulis 		= '$id_penulis',
		id_penerbit 	= '$id_penerbit',
		id_kategori 	= '$id_kategori',
		sinopsis 		= '$sinopsis'
		WHERE
		id 				= '$id_blm'");
}

?>