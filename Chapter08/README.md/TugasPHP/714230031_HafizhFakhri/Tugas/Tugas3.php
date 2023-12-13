<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Latihan 3 </h1>
<?php

function hitungPembayaran($totalPembelian) {
    $diskon = 0;

    if ($totalPembelian >= 100000) {
        $diskon = 25;
    } elseif ($totalPembelian >= 75000) {
        $diskon = 20;
    } elseif ($totalPembelian >= 50000) {
        $diskon = 15;
    } elseif ($totalPembelian >= 25000) {
        $diskon = 10;
    } elseif ($totalPembelian >= 10000) {
        $diskon = 5;
    }

    $diskonAmount = ($diskon / 100) * $totalPembelian;
    $totalPembayaran = $totalPembelian - $diskonAmount;

    echo "Total Pembelian: $totalPembelian\n";
    echo "Diskon ($diskon%): -$diskonAmount\n";
    echo "Total Pembayaran setelah diskon: $totalPembayaran";
}

// Contoh penggunaan
$totalPembelian = 120000;
hitungPembayaran($totalPembelian);

?>

</body>
</html>