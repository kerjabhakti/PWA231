<?php
include ("config.php");
//connect ke database
$db = mysqli_connect($server, $user, $password, $namadb);

if(isset($_GET['id'])) {
  //ambil id dari query string
  $id = $_GET['id'];

  //buat query hapus
  $sql = "DELETE FROM pendaftaran WHERE id=$id";
  $query = mysqli_query($db, $sql);
  if ($query) {
    header('Location: list-maba.php');
  } else {
    die ("gagal menghapus....");
  }
} else {
  die ("akses dilarang...");
}
?>