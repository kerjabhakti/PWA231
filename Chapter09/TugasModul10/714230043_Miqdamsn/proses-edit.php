<?php
//koneksi ke database
require("config.php");
$db = mysqli_connect($server, $user, $password, $namadb);
//ngambil id di url
$id = $_GET["id"];
//query data maba berdasarkan idnya
$mhs = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $mhs);
$siswa = mysqli_fetch_assoc($query);

//apakah tombol submit sudah ditken atau belom
if( isset($_POST["submit"]) ) {
  // ambil data dari tiap elemen dalam form
  $id=$_POST['id'];
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $agama = $_POST["agama"];
  $sekolah_asal = $_POST["sekolah_asal"];

  //query update data
  $mahasw = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";
  $update = mysqli_query($db, $mahasw);
  //cek apakah data berhasil atau gagal
  if ($update) {
    echo "data berhasil di ubah";
  } else {
    echo "gagal mengubah data";
    echo "<br>";
    echo mysqli_error($db);
  }
}
?>
<?php $jk = $siswa['jenis_kelamin']; ?>
<?php $agama = $siswa['agama']; ?>