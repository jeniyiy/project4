<?php 

include('koneksi.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_user WHERE id = '$id'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		header('Location: home_superadmin.php#user');
	}else{
		die("gagal menghapus...");
	}

?>