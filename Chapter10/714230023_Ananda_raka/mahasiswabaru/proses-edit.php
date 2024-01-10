<?php
include("config.php");

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama =$_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    $sql = "UPDATE pendaftaran SET 
            nama = '$nama',
            alamat = '$alamat',
            jenis_kelamin = '$jk',
            agama = '$agama',
            sekolah_asal = '$sekolah'
            WHERE id = '$id'"; 

        $query = mysqli_query($db, $sql);

        if($query) {
            header('Location: index.php?status=sukses');
        } else {
            echo "Gagal melakukan edit data.";
        }
    } else {
        echo "Akses dilarang...";
}
?>