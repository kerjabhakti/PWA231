<?php
require "config.php";
session_start();
$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $sekolah_asal   = $_POST['sekolah_asal'];

    $sql_update = "UPDATE
                    pendaftaran
                 SET
                    nama = '$nama',
                    alamat = '$alamat',
                    jenis_kelamin = '$jenis_kelamin',
                    agama = '$agama',
                    sekolah_asal = '$sekolah_asal'
                 WHERE
                     id = '$id'";
     
     $return = mysqli_query($db, $sql_update);
     if (!$return){
        die("Gagal Edit Mahasiswa Baru!");
     }
     echo "<script>
                alert('Berhasil Edit Mahasiswa Baru');
                document.location.href = 'list-maba.php';
            </script>";
}
?>