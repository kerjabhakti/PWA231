<?php 
    include 'config.php';

    $sql = "SELECT * FROM pendaftaran";
    $query = mysqli_query($conn, $sql);

    if (isset($_GET['status']) == "berhasil") {
        echo "<script>alert('data berhasil ditambahkan')</script>";
    } 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Mahasiswa Baru yang telah mendaftar</h2>
    <a href="form-daftar.php">+ tambah data</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th colspan="2">Tindakan</th>
        </tr>
        <?php $i = 1;?>
        <?php while($data = mysqli_fetch_array($query)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama"]?></td>
            <td><?= $data["alamat"]?></td>
            <td><?= $data["jenis_kelamin"]?></td>
            <td><?= $data["agama"]?></td>
            <td><?= $data["sekolah_asal"]?></td>
            <td><a href="form-edit.php?id=<?= $data["id"];?>">edit</a></td>
            <td><a href="hapus.php?id=<?= $data["id"];?>" onclick="return confirm('apakah anda yakin ingin menghapus data berikut?')">hapus</a></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>
    </table>
    <p>Total: <?= mysqli_num_rows($query);?></p>
    <a href="index.php">kembali</a>
</body>
</html>