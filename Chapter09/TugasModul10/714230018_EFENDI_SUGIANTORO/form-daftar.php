<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru | ULBI</h3>
    </header>

    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <P>
                <label for="alamat">Nama</label>
                <input type="text" name="nama" placeholder="nama lengkap"/>

            </P>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelimin</label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
                    
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
        </fieldset>
    </form>
</body>
</html>