<?php 
include("config.php");

//cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['Asal_sekolah'];
    

    //buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, Asal_sekolah)
    VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if( $query ){
        //jika berhasil alihkan ke halamanindex.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        //kalau gagal akan dialihkan ke halaman index.php dengan status=gagal
        header ('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}


?>