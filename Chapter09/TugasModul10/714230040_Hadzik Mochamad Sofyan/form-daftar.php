<?php 
    if(isset($_GET['status']) == "gagal") {
        echo "<script>alert('data gagal ditambahkan!')</script>";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Mendaftar</h2>
    <form action="proses-pendaftaran.php" method="post">
        <label for="nama">nama<label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda disini">
        <label for="textarea">alamat<label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat anda disini">
        <label for="jenis_kelamin">jenis kelamin<label>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki laki"> <span>laki laki</span>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"> <span>perempuan</span>
        <label for="agama">agama<label>
        <select name="agama" id="agama">
            <option value="islam">islam</option>
            <option value="kristen protestan">kristen protestan</option>
            <option value="kristen katholik">kristen katholik</option>
            <option value="buddha">buddha</option>
            <option value="konguhucu">konghucu</option>
        </select>
        <label for="sekolah_asal">sekolah asal<label>
        <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Masukkan sekolah asal anda">
        <button type="submit">kirim</button>
    </form>
    <a href="index.php">kembali</a>
</body>
</html>