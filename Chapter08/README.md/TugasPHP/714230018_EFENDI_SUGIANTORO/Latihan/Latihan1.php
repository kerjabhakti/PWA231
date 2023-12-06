<html lang="en">
<head>
    <title>Bilangan Ganjil dan Genap</title>
</head>
<body>
    <h2>Menentukan Bilangan Ganjil dan Genap</h2>

    <?php
    //Untuk menentukan bilangan ganjil atau genap
    function cekGanjilGenap($angka) {
        if ($angka % 2 == 0) {
            echo "$angka adalah bilangan genap.";
        } else {
            echo "$angka adalah bilangan ganjil.";
        }
    }

    //Start
    $angka1 = 10;
    $angka2 = 7;

    cekGanjilGenap($angka1);
    echo "<br>";
    cekGanjilGenap($angka2);
    ?>
</body>
</html>
