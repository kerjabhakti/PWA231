<?php
//koneksi ke database
require("config.php");
$db = mysqli_connect($server, $user, $password, $namadb);
//apakah tombol submit sudah ditken atau belom
if( isset($_POST["submit"]) ) {
  // ambil data dari tiap elemen dalam form
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $agama = $_POST["agama"];
  $sekolah_asal = $_POST["sekolah_asal"];

  //query insert data
  $query = "INSERT INTO pendaftaran    
  VALUES ('', '$nama', '$alamat','$jenis_kelamin', '$agama', '$sekolah_asal') ";

  mysqli_query($db, $query);
  //cek apakah data berhasil atau gagal
  if ( mysqli_affected_rows($db) > 0 ) {
    echo "data berhasil di tambahkan";
  } else {
    echo "gagal menambah data";
    echo "<br>";
    echo mysqli_error($db);
  }
}
?>
<br>
<a href="list-maba.php">kembali</a>