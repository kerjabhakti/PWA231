<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Function</h2>
    <p>Menggunakan fungsi untuk melakukan perpangkatan bilangan</p>
    <?php 
        function perpangkatan($angka, $pangkat) {
            // insisialisasi variabel hasil
            $hasil = 1; // menggunakan 1 karena nantinya akan di kalikan dengan variabel angka
            for ($i = 1; $i <= $pangkat; $i++) {
                $hasil *= $angka; // variabel hasil di kalikan dengan angka berulang sebanyak pangkat yang diinputkan
            }
            return $hasil;
        }
        $hasil = perpangkatan(2, 3);

        echo "inputan angka pertama: 2". "<br>";
        echo "inputan angka kedua: 3". "<br>";
        echo "Hasil perpangkatan: " . $hasil;
        
    ?>
</body>
</html>