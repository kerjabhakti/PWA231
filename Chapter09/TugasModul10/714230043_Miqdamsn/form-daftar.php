<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Tambah data mahasiswabaru</h3>
  <form method="post" action="proses-pendaftaran.php">
    <fieldset>
      <p>
      <label for="nama" >Nama : </label>
      <input type="text" name="nama" id="nama" required>
      </p>

      <p>
      <label for="alamat">Alamat : </label>
      <textarea name="alamat" id="alamat"></textarea>
      </p>

      <p>
      <label for="jenis_kelamin">Jenis Kelamin : </label>
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki laki">laki laki</label>
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"> perempuan</label>
      </p>

      <p>
      <label for="agama">Agama : </label>
      <select name="agama">
        <option >islam</option>
        <option >kristen</option>
        <option >hindu</option>
        <option >budha</option>
        <option >atheis</option>
      </select>
      </p>

      <p>
      <label for="sekolah_asal">Sekolah Asal : </label>
      <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder= "Nama Sekolah">
      </p>
      
      <p>
      <button type="submit" name="submit">Kirim</button>
      </p>
    </fieldset>
  </form>
</body>
</html>