<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaqftaran Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <headr>
        <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>

    <form action = "proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan">perempuan</label>          
            </p>
            <p>
                <laael for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                </select>
            </p>
            <p>
                <label for="Asal_sekolah">Sekolah Asal: </label>
                <input type="text" name="Asal_sekolah" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
    </fieldset>
</body>
</html>