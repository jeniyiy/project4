<?php 
 
include('koneksi.php'); 
 
    $id = $_POST['id'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password= $_POST['password'];
    $level = $_POST['level'];
 
    $sql = "UPDATE tb_user SET id='$id', username='$username', nama_lengkap='$nama_lengkap', password='$password', level='$level' WHERE id='$id'";     
    $query = mysqli_query($koneksi, $sql); 
 
    if($query) {         
    header('Location: home_superadmin.php#user');     
    } else {         
    die("Gagal menyimpan perubahan...");     
    } 

?>  