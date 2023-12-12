<?php

function tentukanAngka($angka) {
    if ($angka > 2) {
        echo "$angka adalah bilangan ganjil.";
    } elseif ($angka < 2) {
        echo "$angka adalah angka satu.";
    } else {
        echo "$angka adalah dua.";
    }
}

$angkaContoh = 5;
tentukanAngka($angkaContoh);

?>
