<html lang="en">
<head>
    <title>Latihan 3</title>
</head>
<body>
    <h2>Menentukan Diskon</h2>

    <?php
    //Mula mula Tambahkan Fungsi
    function hitungDiskonDanPembayaran($pembelian) {
        $diskon = 0;

        if ($pembelian >= 100000) {
            $diskon = 25;
        } elseif ($pembelian >= 75000) {
            $diskon = 20;
        } elseif ($pembelian >= 50000) {
            $diskon = 15;
        } elseif ($pembelian >= 25000) {
            $diskon = 10;
        } elseif ($pembelian >= 10000) {
            $diskon = 5;
        }

        $potongan = ($diskon / 100) * $pembelian;
        $totalPembayaran = $pembelian - $potongan;

        echo "Total pembelian: Rp $pembelian<br>";
        echo "Diskon: $diskon%<br>";
        echo "Potongan: Rp $potongan<br>";
        echo "Total pembayaran setelah diskon: Rp $totalPembayaran";
    }
    //Pembelian
    $pembelian1 = 120000;
    $pembelian2 = 50000;

    hitungDiskonDanPembayaran($pembelian1);
    echo "<br><br>";
    hitungDiskonDanPembayaran($pembelian2);
    ?>

</body>
</html>
