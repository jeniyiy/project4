<?php 

include('koneksi.php');

	$id_buku = $_GET['id_buku'];
	$sql = "DELETE FROM tb_buku WHERE id_buku = '$id_buku'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		header('Location: home_superadmin.php#manualbook');
	}else{
		die("gagal menghapus...");
	}

?>