<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Universitas Logistik Dan Bisnis Internasional</h1>
        <h2>(ULBI)</h2>
    </header>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>
    </nav>

    <!-- Pesan jika data berhasil Sukses -->
    <?php
        if (isset($_GET['status']) == '1') {
            echo '<div style="color: green;">Pendaftaran berhasil!</div>';
        }
    ?>
</body>
</html>
