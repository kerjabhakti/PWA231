<?php
include("proses-edit.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Edit data mahasiswabaru</h3>
  <form method="post" action="proses-edit.php">
    <fieldset>
      <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
      <p>
      <label for="nama" >Nama : </label>
      <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama'] ?>">
      </p>

      <p>
      <label for="alamat">Alamat: </label>
      <textarea name="alamat" id="alamat"><?php echo $siswa['alamat'] ?></textarea>
      </p>

      <p>
      <label for="jenis_kelamin">Jenis Kelamin : </label>
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki laki') ? "checked": "" ?>> laki laki</label>
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> perempuan</label>
      </p>

      <p>
      <label for="agama">Agama : </label>
      <select name="agama" id="agama">
        <option <?php echo ($agama == 'islam') ? "selected": "" ?>>islam</option>
        <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>kristen</option>
        <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>hindu</option>
        <option <?php echo ($agama == 'budha') ? "selected": "" ?>>budha</option>
        <option <?php echo ($agama == 'atheis') ? "selected": "" ?>>atheis</option>
      </select>
      </p>

      <p>
      <label for="sekolah_asal">Sekolah Asal : </label>
      <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder= "Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>">
      </p>
      
      <p>
      <button type="submit" name="submit">ubah</button>
      </p>
    </fieldset>
  </form>
  <a href="list-maba.php">kembali</a>
</body>
</html>