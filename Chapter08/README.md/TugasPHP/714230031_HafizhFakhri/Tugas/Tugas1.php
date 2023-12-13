<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Latihan 1 </h1>
<?php

function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan genap";
    } else {
        echo "$angka adalah bilangan ganjil";
    }
}

// Contoh
$angka = 7;
cekGanjilGenap($angka);

?>
</body>
</html>