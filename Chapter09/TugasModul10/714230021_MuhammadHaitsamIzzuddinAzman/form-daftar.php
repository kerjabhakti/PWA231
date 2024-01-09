<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran  Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <header>
        <h3>Formulir Mahasiswa Baru | POLTEKPOS</h3>
    </header>
    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="nama lengkap"></input>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal : </label>
                <input type="text" name="sekolah_aal" placeholder="nama sekolah"></input>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"></input>
            </p>
        </fieldset>
    </form>
</body>
</html>