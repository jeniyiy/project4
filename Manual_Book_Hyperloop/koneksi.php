<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "manual_book";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>