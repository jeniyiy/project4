<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$password=$_POST['password'];
	$level=$_POST['level'];

	mysqli_query($koneksi,"INSERT INTO tb_user VALUES('$id','$username','$nama_lengkap','$password','$level')");

	header('Location: home_superadmin.php#user?status=sukses');
}
?>