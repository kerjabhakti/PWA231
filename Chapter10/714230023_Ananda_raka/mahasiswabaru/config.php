<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "mahasiswa baru";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung dengan data base : " . mysqli_connect_error());
}
?>