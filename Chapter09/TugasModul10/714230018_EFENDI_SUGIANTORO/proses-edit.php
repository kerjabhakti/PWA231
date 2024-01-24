<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $sekolah_asal = $_POST["sekolah_asal"];

    // Update record dalam database
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        // Pesan berhasil dan redirect ke halaman utama
        echo "Data berhasil diupdate!";
        header("Refresh: 2; URL=index.php"); // Redirect ke main page setelah 2 detik
        exit();
    } else {
        // Pesan gagal dan tampilkan error
        echo "Error updating record: " . mysqli_error($db);
        exit();
    }
} else {
    // Pesan invalid request
    echo "Invalid request.";
    exit();
}
?>
