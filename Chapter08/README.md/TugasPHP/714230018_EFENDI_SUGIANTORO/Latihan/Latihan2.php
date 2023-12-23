<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Bilangan Genap</title>
</head>
<body>
    <h2>Menentukan Bilangan Genap</h2>
    <?php
    // Inisialisasi variabel
    $jumlah = 0;

    // Pengulangan untuk menjumlahkan bilangan genap dari 0 hingga 6
    for ($i = 0; $i <= 6; $i += 2) {
        $jumlah += $i;
    }

    // Menampilkan hasil
    echo "Jumlah bilangan genap dari 0 sampai 6 adalah: $jumlah";
    ?>
</body>
</html>
