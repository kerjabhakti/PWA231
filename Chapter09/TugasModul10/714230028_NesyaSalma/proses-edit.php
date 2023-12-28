<?php
    require "config.php";
    session_start();
    $id = $_GET['id'];
    $sql = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id = '$id'");

    while ($data = mysqli_fetch_array($sql)) {
        $nama           = $data['nama'];
        $alamat         = $data['alamat'];
        $jenis_kelamin  = $data['jenis_kelamin'];
        $agama          = $data['agama'];
        $asal_sekolah   = $data['asal_sekolah'];
    }

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
                        asal_sekolah = '$asal_sekolah'
                    WHERE
                        id = '$id'";

        $return = mysqli_query($db, $sql_update);
        if (!$return) {
            die("Gagal Edit Mahasiswa Baru!");
        }
        echo "<script>
                alert('Berasil Edit Mahasiswa Baru');
                document.location.href = 'list-maba.php';
            </script>";
        }