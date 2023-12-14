<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tugas 2</h2>
    <p>Penjumlahan bilangan hasil genap 0 s.d 6</p>
    <?php
    $angka = 0;
    for ($i = 0; $i <= 6; $i += 2) {
        $angka += $i;
    }

    echo "Hasil penjumlahan bilangan genap 0 s.d 6 adalah: $angka";
    ?>
</body>
</html>