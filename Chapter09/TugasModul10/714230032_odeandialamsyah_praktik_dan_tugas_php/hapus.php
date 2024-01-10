<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Mahasiswa Baru | ULBI</title>
</head>
<body>
    <header>
        <h3>Hapus Data Mahasiswa Baru | ULBI</h3>
    </header>

    <?php
    include("config.php");

    // Cek apakah ada parameter ID dari URL
    if (isset($_GET['id'])) {
        $id_to_delete = $_GET['id'];

        // Query untuk mengambil data yang akan dihapus
        $sql = "SELECT * FROM pendaftaran_1 WHERE id_camaba = $id_to_delete";
        $result = mysqli_query($db, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $maba = mysqli_fetch_assoc($result);

            // Jika tombol Hapus diklik
            if (isset($_POST['hapus'])) {
                // Query untuk melakukan penghapusan data
                $sql_delete = "DELETE FROM pendaftaran_1 WHERE id_camaba = $id_to_delete";
                $result_delete = mysqli_query($db, $sql_delete);

                if ($result_delete) {
                    echo "Data berhasil dihapus.";
                    header("Location: index.php?status=sukses");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($db);
                    header("Location: index.php?status=gagal");
                    exit();
                }
            }
    ?>
            <p>Apakah Anda yakin ingin menghapus data berikut?</p>
            <p>ID: <?php echo $maba['id_camaba']; ?></p>
            <p>Nama: <?php echo $maba['nama']; ?></p>
            <p>Alamat: <?php echo $maba['alamat']; ?></p>
            <p>Jenis Kelamin: <?php echo $maba['jenis_kelamin']; ?></p>
            <p>Agama: <?php echo $maba['agama']; ?></p>
            <p>Sekolah Asal: <?php echo $maba['asal_sekolah']; ?></p>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $maba['id_camaba']; ?>">
                <input type="submit" value="Hapus" name="hapus">
            </form>
    <?php
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak ditemukan.";
    }
    ?>

    <p><a href="index.php">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>
