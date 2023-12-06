<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
</head>
<body>
    <h2>Kalkulator Diskon dan Pembayaran</h2>

    <?php
    // Fungsi untuk menghitung diskon dan pembayaran
    function hitungDiskonDanPembayaran($totalPembelian) {
        $diskon = 0;

        // Menentukan diskon berdasarkan total pembelian
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

        // Menghitung jumlah diskon
        $jumlahDiskon = ($diskon / 100) * $totalPembelian;

        // Menghitung jumlah yang harus dibayar setelah diskon
        $totalPembayaran = $totalPembelian - $jumlahDiskon;

        // Menampilkan hasil
        echo "<p>Total Pembelian: Rp $totalPembelian</p>";
        echo "<p>Diskon ($diskon%): Rp $jumlahDiskon</p>";
        echo "<p>Total Pembayaran setelah Diskon: Rp $totalPembayaran</p>";
    }

    // Memeriksa apakah formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai total pembelian dari formulir
        $totalPembelian = $_POST["total_pembelian"];

        // Memastikan bahwa input adalah angka
        if (is_numeric($totalPembelian)) {
            // Menghitung diskon dan pembayaran
            hitungDiskonDanPembayaran($totalPembelian);
        } else {
            echo "<p>Input bukan angka. Silakan masukkan total pembelian dalam angka.</p>";
        }
    }
    ?>

    <!-- Formulir untuk memasukkan total pembelian -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="total_pembelian">Masukkan Total Pembelian:</label>
        <input type="text" id="total_pembelian" name="total_pembelian" required>
        <button type="submit">Hitung</button>
    </form>

</body>
</html>