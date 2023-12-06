<?php
$nilai1 = 10;
$nilai2 = 5;
$nilai3 = 7;

// Operator logika 
$ekspresiRumit = ($nilai1 > $nilai2) && (($nilai2 + $nilai3) < ($nilai1 * 2) || ($nilai1 % 2 == 0));

// Menampilkan hasil menggunakan printf
printf("Nilai1: %d<br>", $nilai1);
printf("Nilai2: %d<br>", $nilai2);
printf("Nilai3: %d<br>", $nilai3);

printf("Ekspresi logika rumit: %s", $ekspresiRumit ? 'True' : 'False');
?>
