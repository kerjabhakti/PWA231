<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa Baru | ULBI</title>
</head>
<body>
    <header>
        <h3>Edit Data Mahasiswa Baru | ULBI</h3>
    </header>

    <?php
    include("config.php");

    // Cek apakah ada parameter ID dari URL
    if (isset($_GET['id'])) {
        $id_to_edit = $_GET['id'];

        // Query untuk mengambil data yang akan diedit
        $sql = "SELECT * FROM pendaftaran_1 WHERE id_camaba = $id_to_edit";
        $result = mysqli_query($db, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $maba = mysqli_fetch_assoc($result);
    ?>
            <form action="proses-edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $maba['id_camaba']; ?>">
                <fieldset>
                    <p>
                        <label for="nama">Nama: </label>
                        <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $maba['nama']; ?>">
                    </p>

                    <p>
                        <label for="alamat">Alamat: </label>
                        <textarea name="alamat"><?php echo $maba['alamat']; ?></textarea>
                    </p>

                    <p>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($maba['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>>Laki-Laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($maba['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>>Perempuan</label>
                    </p>
                    <p>
                        <label for="agama">Agama: </label>
                        <select name="agama">
                            <option value="Islam" <?php echo ($maba['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                            <option value="Kristen" <?php echo ($maba['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                            <option value="Hindu" <?php echo ($maba['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                            <option value="Budha" <?php echo ($maba['agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                            <option value="Agama Kepercayaan" <?php echo ($maba['agama'] == 'Agama Kepercayaan') ? 'selected' : ''; ?>>Agama Kepercayaan</option>
                        </select>
                    </p>

                    <p>
                        <label for="asal_sekolah">Sekolah Asal: </label>
                        <input type="text" name="asal_sekolah" placeholder="Nama Sekolah" value="<?php echo $maba['asal_sekolah']; ?>">
                    </p>
                    <p>
                        <input type="submit" value="Update" name="update">
                    </p>
                </fieldset>
            </form>
    <?php
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak ditemukan.";
    }
    ?>
</body>
</html>
