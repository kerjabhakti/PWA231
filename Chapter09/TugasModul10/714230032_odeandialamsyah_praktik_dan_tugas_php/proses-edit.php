<?php
include("config.php");

// cek apakah tombol update sudah bisa di klik atau belum
if (isset($_POST['update'])){
    // ambil data dari formulir
    $id = $_POST['id']; // ID data yang akan diupdate
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // buat Query untuk melakukan update
    $sql = "UPDATE pendaftaran_1 SET 
            nama='$nama', 
            alamat='$alamat', 
            jenis_kelamin='$jk', 
            agama='$agama', 
            asal_sekolah='$sekolah' 
            WHERE id_camaba='$id'";
    $query = mysqli_query($db, $sql);
    
    // apakah query update berhasil di lakukan
    if($query) {
        // kalau berhasil kembali ke index
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }
} else{
    die("akses dilarang......");
}
?>
