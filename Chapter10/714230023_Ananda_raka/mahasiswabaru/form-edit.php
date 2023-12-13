<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengeditan Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <header>
        <h3>Edit data mahasiswa | POLTEKPOS</h3>
    </header>

    <?php
    include("config.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM pendaftaran WHERE id='$id'";
        $query = mysqli_query($db, $sql);
        $mahasiswa = mysqli_fetch_assoc($query);

        if($mahasiswa) {
    ?>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
    <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" placeholder="Nama lengkap"/>
    </p>
    <p>
        <label for="alamat">Alamat: </label>
        <textarea name="alamat"><?php echo $mahasiswa['alamat'];?></textarea>
    </p>
    <p>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($mahasiswa['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>>Laki-Laki</label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($mahasiswa['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>>Perempuan</label>
    </p>
    <p>
        <label for="agama">Agama</label>
        <select name="agama">
            <option <?php echo ($mahasiswa['agama'] == 'Islam')? 'selected' : '';?>>Islam</option>
            <option <?php echo ($mahasiswa['agama'] == 'Kristen')? 'selected' : '';?>>Kristen</option>
            <option <?php echo ($mahasiswa['agama'] == 'Hindu')? 'selected' : '';?>>Hindu</option>
            <option <?php echo ($mahasiswa['agama'] == 'Budha')? 'selected' : '';?>>Budha</option>
            <option <?php echo ($mahasiswa['agama'] == 'Atheis')? 'selected' : '';?>>Atheis</option>
        </select>
    </p>
    <p>
        <label for="Sekolah_Asal">Sekolah Asal</label>
        <input type="text" name="Sekolah_Asal" placeholder="Nama sekolah">
     </p>
    <p>
    <input type="submit" value="Simpan" name="edit" />
    </p>
        
    </form>
     <?php
        } else {
            echo "Data mahasiswa tidak ditemukan.";
        }
    } else {
        echo "ID tidak ditemukan.";
    }
    ?>
    
</body>
</html>