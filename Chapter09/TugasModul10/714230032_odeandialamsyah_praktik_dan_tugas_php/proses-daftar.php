<?php
include("config.php");

// cek apakah tombol daftar sudah bisa di klik atau belum
if (isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // buat Query
    $sql = "INSERT INTO pendaftaran_1 (nama, alamat, jenis_kelamin, agama, asal_sekolah)
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simopan berhasil di lakukan
    if($query) {
        // kalau berhasil ke index
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }
} else{
    die("akses dilarang......");
}
?>