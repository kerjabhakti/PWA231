<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Foreach</h1>
    <p>Menampilkan data array multidimensi dengan index array assosiatif mennggunakan foreach</p>
    <?php 
        $data_mahasiswa = [
            ["nama" => "Hadzik Mochamad Sofyan", "prodi" => "D4 Teknik Informatika", "universitas" => "Universitas Logistik dan Bisnis Internasional"],
            ["nama" => "Fiko Abdigusti", "prodi" => "D4 Teknik Inforamtika", "universitas" => "STMIK Mardira"],
            ["nama" => "Randika Okta Harari", "prodi" => "S1 Akuntansi", "universitas" => "Universitas Jendral Achmad Yani"],
            ["nama" => "Muhamad Rahman Kurnia", "prodi" => "D4 Teknik Elektro", "universitas" => "Politeknik Negeri Bandung"]
        ];
    ?>

    <?php foreach($data_mahasiswa as $siswa): ?>
        <ul>
            <li>Nama: <?php echo $siswa["nama"];?></li>
            <li>Prodi: <?php echo $siswa["prodi"];?></li>
            <li>Universitas: <?php echo $siswa["universitas"];?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>