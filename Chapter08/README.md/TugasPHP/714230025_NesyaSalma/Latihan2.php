<?php
$jumlah = 0;

for ($i = 0; $i <= 6; $i += 2) {
    echo $i . " ";
    $jumlah += $i;
}

echo "Hasil penjumlahan bilangan genap adalah: " . $jumlah;
?>
