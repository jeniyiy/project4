<?php
//memanggil koneksi database
include "koneksi.php";

$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);
$level = mysqli_escape_string($koneksi, $_POST['level']);
//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' and level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);
//jika user terdaftar
if($user_valid){
	if ($password == $user_valid['password']) {
		session_start();
		$_SESSION['username'] = $user_valid['username'];
		$_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
		$_SESSION['level'] = $user_valid['level'];

		//uji level
		if ($level == "Superadmin") {
			header('location:home_superadmin.php');
		}elseif ($level == "Admin") {
			header('location:home_admin.php');
		}elseif ($level == "Academic") {
			header('location:home_academic.php');
		}elseif ($level == "Parent") {
			header('location:home_parent.php');
		}elseif ($level == "Principal") {
			header('location:home_principal.php');
		}elseif ($level == "Registrant") {
			header('location:home_registrant.php');
		}elseif ($level == "Staff") {
			header('location:home_staff.php');
		}elseif ($level == "Student") {
			header('location:home_student.php');
		}elseif ($level == "Studentship") {
			header('location:home_studentship.php');
		}elseif ($level == "Teacher") {
			header('location:home_teacher.php');
		}
	}else{
		echo "<script>alert('Maaf Login Gagal, Password salah');
		document.location='login.php'</script>";
	}
}else{
	echo "<script>alert('Maaf Login Gagal, Username tidak terdaftar');
	document.location='login.php'</script>";
}
?>