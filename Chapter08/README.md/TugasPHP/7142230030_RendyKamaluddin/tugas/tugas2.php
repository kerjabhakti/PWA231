<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <h4>Menjumlahkan bilangan genap 0 sampai 6 (0+2+4+6)</h4>

    <?php
        $jumlahBilanganGenap = 0;

        for ($i=0; $i <= 6 ; $i+=2) { 
            $jumlahBilanganGenap += $i;
        }
        echo "Jumlahkan bilangan genap 0 sampai 6 adalah $jumlahBilanganGenap";
    ?>
</body>
</html>