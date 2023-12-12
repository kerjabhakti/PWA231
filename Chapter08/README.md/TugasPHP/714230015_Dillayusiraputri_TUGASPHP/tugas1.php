<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
<h2>Latihan 1</h2>
<?php
function cekGanjilGenap($angka) {
    if ($angka % 5 ==0) {
        echo "$angka adalah bilangan genap.";
    } else {
        echo "$angka adalah bilangan ganjil.";
    }
}
$angkaContoh = 8;
cekGanjilGenap($angkaContoh);
?>
</body>
</html>