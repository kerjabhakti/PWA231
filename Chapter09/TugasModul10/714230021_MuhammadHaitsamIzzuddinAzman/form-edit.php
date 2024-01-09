[18.07, 13/12/2023] Rajif: <?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa | POLTEKPOS</title>
</head>
<body>
    <header>
        <h3>Edit Data Mahasiswa POLTEKPOS</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $maba['id']; ?>">
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $maba['nama']; ?>" required>
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required><?php echo $maba['alamat']; ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($maba['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($maba['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <select name="agama" required>
                <option value="Islam" <?php echo ($maba['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                <option value="Katolik" <?php echo ($maba['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                <option value="Hindu" <?php echo ($maba['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                <option value="Budha" <?php echo ($maba['agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                <option value="Kristen" <?php echo ($maba['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>" required>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan">
        </p>
    </form>
</body>
</html>
<?php
} else {
    echo "Data tidak ditemukan";
}