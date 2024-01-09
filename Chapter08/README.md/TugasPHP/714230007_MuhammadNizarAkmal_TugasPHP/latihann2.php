<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - pengulangan penjumlahan genap</title>
</head>
<body>
    <h2>Penjumlahan bilangan genap</h2>
    <?php
    $hasil = 0;
    for ($g = 0 ; $g <= 8; $g += 2) {
        $hasil += $g;
    }
    echo "akumulasi bilangan genap dari 0 sampai 8 adalah $hasil"
    ?>
</body>
</html>