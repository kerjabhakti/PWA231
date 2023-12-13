<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Politeknik Pos Indonesia</h1>
    </header>
    
    <h4>Menu</h4>
    <nav>
    </ul>
        <li><a href="form-daftar.php">Daftar</a></li>
        <li><a href="list-maba.php">Pendaftaran</a></li>
    </ul>  
</nav>  
<br>
<!-- pesan jika data pendaftar berhasil berhasil ditambahkan -->
<?php
    if (isset($_GET['status']) == '1') {
        echo "<b>Pendaftaran Mahasiswa Baru POLTEKPOS Telah Berhasil!</b>";
    }
?>
</body>
</html>