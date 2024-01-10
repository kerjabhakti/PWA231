<?php 
    include 'config.php';

    $id = $_GET['id'];

    if(isset($_GET['status']) == "gagal") {
        echo "<script>alert('data gagal diubah!')</script>";
    }

    $database = mysqli_query($conn, "SELECT * FROM pendaftaran");
    $data = mysqli_fetch_assoc($database);
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
    <form action="proses-edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <label for="nama">nama<label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda disini" value="<?= $data['nama'];?>">
        <label for="textarea">alamat<label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat anda disini" value="<?= $data['alamat'];?>">
        <label for="jenis_kelamin">jenis kelamin<label>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki laki" <?php echo ($data['jenis_kelamin'] == "laki laki") ? 'checked' : ''; ?>> <span>laki laki</span>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?php echo ($data['jenis_kelamin'] == "perempuan") ? 'checked' : ''; ?>> <span>perempuan</span>
        <label for="agama">agama<label>
        <select name="agama" id="agama">
            <option value="<?= $data['agama'];?>"><?= $data['agama'];?></option>
            <option value="islam">islam</option>
            <option value="kristen protestan">kristen protestan</option>
            <option value="kristen katholik">kristen katholik</option>
            <option value="buddha">buddha</option>
            <option value="konguhucu">konghucu</option>
        </select>
        <label for="sekolah_asal">sekolah asal<label>
        <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Masukkan sekolah asal anda" value="<?= $data['sekolah_asal'];?>">
        <button type="submit" onclick="return confirm('apakah anda yakin ingin melakukan perubahan?')">kirim</button>
    </form>
    <a href="index.php">kembali</a>
</body>
</html>