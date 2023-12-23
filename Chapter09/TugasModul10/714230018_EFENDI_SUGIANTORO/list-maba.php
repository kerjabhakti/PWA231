<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Data</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);

            if (!$query) {
                die("Query error: " . mysqli_error($db));
            }

            while ($maba = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $maba['id'] ?></td>
                    <td><?= $maba['nama'] ?></td>
                    <td><?= $maba['alamat'] ?></td>
                    <td><?= $maba['jenis_kelamin'] ?></td>
                    <td><?= $maba['agama'] ?></td>
                    <td><?= $maba['sekolah_asal'] ?></td>
                    <td>
                        <a href='form-edit.php?id=<?= $maba['id'] ?>'>Edit</a> |
                        <a href='hapus.php?id=<?= $maba['id'] ?>' onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?= mysqli_num_rows($query) ?></p>
</body>

</html>
