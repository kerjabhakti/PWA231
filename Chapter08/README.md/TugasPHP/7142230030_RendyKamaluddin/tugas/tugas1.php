<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h2>Latihan 1</h2>
    <h4>Menampilkan bilangan ganjil dan bilangan genapnya juga</h4>

    <?php
        $angkaGenap = 10;
        $angkaGanjil = 11;

        function cekBilangan($angka){
            if ($angka % 2 == 0) {
                echo "$angka adalah bilangan Genap";
            } elseif ($angka % 2 == 1) {
                echo "$angka adalah bilangan Ganjil";
            } else {
                echo "Yang dimasukan bukan angka!!!";
            }

        }
    ?>

    <p>angka = <?php echo cekBilangan($angkaGanjil); ?></p>
    <p>angka = <?php echo cekBilangan($angkaGenap); ?></p>
</body>
</html>