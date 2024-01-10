<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran mahasiswa baru Universitas Logistik dan Bisnis Internasional</title>
</head>
<body>
    <h2>Pendaftaran Mahasiswa Baru</h2>
    <h2>Universitas Logistik dan Bisnis Internasional</h2>
    <p>Jl. Sari Asih No.54, Sarijadi, Kec. Sukasari, Kota Bandung, Jawa Barat 40151</p>
    <h3>Menu</h3>
    <a href="form-daftar.php">daftar</a>
    <br>
    <a href="list-maba.php">pendaftar</a>

    <?php 
    if (isset($_GET['status']) == "berhasil") {
        echo "<p>data berhasil ditambahkan!</p>";
    }
?>
</body>
</html>