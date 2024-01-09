<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <header>
    <h3>Formulir Pendaftaran Mahasiswa</h3>
    </header>
    <form action="proses-daftar.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required>
        </p>
        <p>
        <label for="alamat">Alamat: </label>
        <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" required>Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" required>Perempuan</label>
        </p>
        <p>
        <label for="agama">Agama: </label>
        <select name="agama">
        <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Buddha</option>
            <option>Konghuchu</option> 
        </select>
        </p>
        <p>
            <label for="asal sekolah">Sekolah Asal: </label>
            <input type="text" name="asal sekolah" placeholder="nama sekolah" required>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar">
        </p>
    </fieldset>
    </form>
</body>
</html>