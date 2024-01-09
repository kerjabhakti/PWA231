<?php include("config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm_to_edit = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];

    // Lakukan query UPDATE untuk menyimpan perubahan
    $sql_update = "UPDATE pendaftaran SET nama = '$nama', alamat = '$alamat' WHERE npm = '$npm_to_edit'";
    $result_update = mysqli_query($db, $sql_update);

    if ($result_update) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($db);
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>