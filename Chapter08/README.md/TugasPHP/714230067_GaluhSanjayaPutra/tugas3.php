<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <h2>Latihan 3</h2>
    <h4>Menentukan diskon dan sekaligus perhitungan pembayaran</h4>

    <?php
        $pembelian = 75000;
        $diskon = 0;

        if ($pembelian >= 100000) {
            $diskon = $pembelian * (25/100);
        } elseif ($pembelian >= 75000) {
            $diskon = $pembelian * (20/100);
        } elseif ($pembelian >= 50000) {
            $diskon = $pembelian * (15/100);
        } elseif ($pembelian >= 25000) {
            $diskon = $pembelian * (10/100);
        } elseif ($pembelian >= 10000) {
            $diskon = $pembelian * (5/100);
        } else {
            echo "Tidak ada diskon";
        }

        $pembayaran = $pembelian - $diskon;
        echo "Total Pembelian  = RP.".$pembelian."<br>";
        echo "Diskon           = RP.".$diskon."<br>";
        echo "Total Pembayaran = RP.".$pembayaran;
    ?>
</body>
</html>