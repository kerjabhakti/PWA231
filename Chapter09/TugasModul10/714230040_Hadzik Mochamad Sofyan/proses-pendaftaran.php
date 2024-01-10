<?php 
    include 'config.php';

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $sekolah_asal = $_POST["sekolah_asal"];

    $sql = "INSERT INTO `pendaftaran`(`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) 
            VALUES (NULL,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal')";
    $query = mysqli_query($conn, $sql);

    if ($row = mysqli_affected_rows($conn) > 0){
        header("Location: index.php?status=berhasil");
    } else {
        header("Location: form-daftar.php?status=gagal");
    }
?>