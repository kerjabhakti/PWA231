<?php
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST ['daftar'])){

        $nama = $_POST ['nama'];
        $alamat = $_POST ['alamat'];
        $jk = $_POST ['jenis_kelamin'];
        $agama = $_POST ['agama'];
        $sekolah_asal = $_POST ['sekolah_asal'];

        $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah_asal' )";
        $query = mysqli_query($db, $sql);

        if ($query){
            header('Location: index.php?status=berhasil');
        } else {
            header ('Location: index.php?status=gagal');
        }
    } else {
        die ("Akses dilarang....");
    }
    ?>
</body>
</html>