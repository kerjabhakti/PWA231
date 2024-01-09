<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "mahasiswabaru";

$db = mysqli_connect($server, $user, $password, $namadb);
if (!$db) {
  die ("gagal terhubung dengan database : ".mysqli_connect_error());
}
?>