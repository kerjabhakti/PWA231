<?php include("config.php");

if (isset($_GET['id'])) {
    $npm_to_edit = $_GET['id'];

    // Lakukan query SELECT untuk mendapatkan data yang akan diubah
    $sql_select = "SELECT * FROM pendaftaran WHERE npm = '$npm_to_edit'";
    $result_select = mysqli_query($db, $sql_select);

    if ($result_select) {
        $maba_edit = mysqli_fetch_assoc($result_select);
        // Tampilkan formulir pengeditan di sini menggunakan nilai $maba_edit
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Data Mahasiswa</title>
        </head>
        <body>
            <h2>Edit Data Mahasiswa</h2>
            <form action="proses-edit.php" method="post">
               
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?php echo $maba_edit['nama']; ?>" required><br>

                <label for="alamat">Alamat:</label>
                <textarea name="alamat" value="<?php echo $maba_edit['alamat']; ?>" required></textarea>

                <input type="hidden" name="npm" value="<?php echo $npm_to_edit; ?>">
                <input type="submit" value="Simpan">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Gagal mengambil data untuk diedit: " . mysqli_error($db);
    }
} else {
    echo "ID tidak diberikan. Pengeditan data tidak dapat dilakukan.";
}
?>