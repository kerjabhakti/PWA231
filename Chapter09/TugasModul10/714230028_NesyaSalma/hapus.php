<?php
    require "config.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM pendaftaran WHERE id ='$id'";
    $hapus = mysqli_query($db, $sql);
    if (!$hapus) {
        die("Gagal Menghapus Mahasiswa Baru");
    }echo "<script>
                alert('Data Telah Dihapus');
                document.location.href = 'list-maba.php';
            </script>";
?>