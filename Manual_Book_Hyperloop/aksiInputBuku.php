<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$id_buku=$_POST['id_buku'];
	$nama_buku=$_POST['nama_buku'];
	$modul=$_POST['modul'];
	$role=$_POST['role'];
	$gambar_modul=$_POST['gambar_modul'];
	$link=$_POST['link'];

	mysqli_query($koneksi,"INSERT INTO tb_buku VALUES('$id_buku','$nama_buku','$modul','$role','$gambar_modul','$link')");

	header('Location: home_superadmin.php#manualbook?status=sukses');
}
?>