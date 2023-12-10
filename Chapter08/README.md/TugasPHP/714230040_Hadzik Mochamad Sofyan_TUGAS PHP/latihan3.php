<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Latihan 3</h2>
    <?php 
        $nominal_belanja = 200000;
        $diskon = 0;
        
        if ($nominal_belanja >= 100000){
            $diskon = 25;
            $kalkulasi_diskon = $nominal_belanja * ($diskon/100);
            $hasil_akhir = $nominal_belanja - $kalkulasi_diskon;

            echo "nominal: " . formatRupiah($nominal_belanja). "<br>";
            echo "diskon: " . $diskon . "%" . "<br>";
            echo formatRupiah($hasil_akhir);
        } else if ($nominal_belanja <= 75000){
            $diskon = 20;
            $kalkulasi_diskon = $nominal_belanja * ($diskon/100);
            $hasil_akhir = $nominal_belanja - $kalkulasi_diskon;

            echo "nominal: " . formatRupiah($nominal_belanja). "<br>";
            echo "diskon: " . $diskon . "%" . "<br>";
            echo formatRupiah($hasil_akhir);
        } else if ($nominal_belanja <= 50000){
            $diskon = 15;
            $kalkulasi_diskon = $nominal_belanja * ($diskon/100);
            $hasil_akhir = $nominal_belanja - $kalkulasi_diskon;

            echo "nominal: " . formatRupiah($nominal_belanja). "<br>";
            echo "diskon: " . $diskon . "%" . "<br>";
            echo formatRupiah($hasil_akhir);
        } else if ($nominal_belanja <= 25000){
            $diskon = 10;
            $kalkulasi_diskon = $nominal_belanja * ($diskon/100);
            $hasil_akhir = $nominal_belanja - $kalkulasi_diskon;

            echo "nominal: " . formatRupiah($nominal_belanja). "<br>";
            echo "diskon: " . $diskon . "%" . "<br>";
            echo formatRupiah($hasil_akhir);
        } else if ($nominal_belanja <= 10000){
            $diskon = 5;
            $kalkulasi_diskon = $nominal_belanja * ($diskon/100);
            $hasil_akhir = $nominal_belanja - $kalkulasi_diskon;

            echo "nominal: " . formatRupiah($nominal_belanja). "<br>";
            echo "diskon: " . $diskon . "%" . "<br>";
            echo formatRupiah($hasil_akhir);
        } 

        function formatRupiah($nominal){
            $format_rupiah = "Rp " . number_format($nominal, 0, ',', '.');
            return $format_rupiah;
        }
    ?>
</body>
</html>