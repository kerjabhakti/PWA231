<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI </title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Universitas Logistik & Bisnis Internasional</h1>
    </header>

    <h4> Menu</h4>
    <nav>
        <ul>
            <li ><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftaran</a></li>
        </ul>
    </nav>
    <?php
        if (isset ($_GET ['status']) == '1') {
            echo "Pendaftaran Mahasiswa Baru ULBI Berhasil";
        }
    ?>
</body>
</html>