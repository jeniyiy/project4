<?php 
 
include('koneksi.php'); 
 
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $modul = $_POST['modul'];
    $role= $_POST['role'];
    $gambar_modul = $_POST['gambar_modul'];
    $link = $_POST['link'];
 
    $sql = "UPDATE tb_buku SET id_buku='$id_buku', nama_buku='$nama_buku', modul='$modul', role='$role', gambar_modul='$gambar_modul', link='$link' WHERE id_buku='$id_buku'";     
    $query = mysqli_query($koneksi, $sql); 
 
    if($query) {         
    header('Location: home_superadmin.php');     
    } else {         
    die("Gagal menyimpan perubahan...");     
    } 

?>