<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Universitas</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>

        <?php
    // Cek apakah variabel status ada dalam URL
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        // Tampilkan teks berdasarkan status
        if ($status === 'sukses') {
            echo '<p style="color: green;">Operasi berhasil!</p>';
        } elseif ($status === 'gagal') {
            echo '<p style="color: red;">Operasi gagal!</p>';
        }
    }
?>
    </nav>
    
</body>
</html>