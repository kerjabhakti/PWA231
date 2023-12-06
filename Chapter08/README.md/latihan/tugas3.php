<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <h2> Kalkulatorr Diskon dan Pembayaran</h2>

    <?php
    // fungsi untuk menghitung diskon dan pembayaran
    function hitungDiskonDanPembayaran($totalPembelian) {
        $diskon = 0;
        // menentukan diskon berdasarkan total pembelian
        if($totalPembelian >=100000){
            $diskon = 25;
        } elseif ($totalPembelian >= 75000){
            $diskon = 20;
        } elseif ($totalPembelian >= 50000){
            $diskon = 15;
        } elseif ($totalPembelian >= 25000){
            $diskon = 10;
        } elseif ($totalPembelian >= 10000){
            $diskon = 5;
        }
        //menghitung jumlah diskon
        $jumlahDiskon = ($diskon/100)*$totalPembelian;
        
        //menghitung jumlah yang harus di bayar setelah diskon 
        $totalPembayaran = $totalPembelian - $jumlahDiskon;

        //menampilkan hasil
        echo "<p>Total pembelian: Rp $totalPembelian</p>";
        echo "<P>Diskon ($diskon%): Rp $jumlahDiskon</p>";
        echo "<p>Total pembayaran setelah diskon :Rp $totalPembayaran</P>";
    }
    // memeriksa bahwa formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //mengambil nilai total pembelian dari formulir
        $totalPembelian = $_POST["total_pembelian"];

        //memastikan bahwa input adalah angka 
        if (is_numeric($totalPembelian)) {
            //menghitung diskon dengan pembayaran
            hitungDiskonDanPembayaran($totalPembelian);
        } else {
            echo "<p>Input bukan angka. Silahkan masukan total pembelian dalam angka.</p>";
        }
    }

?>
<!-- formulir untuk memasukkan total pembelian -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <label for="total_pembelian">masukan Total Pembelian:</label>
    <input type="text" id="total_pembelian" name="total_pembelian" required>
    <button type="submit">Hitung</button>

</body>
</html>