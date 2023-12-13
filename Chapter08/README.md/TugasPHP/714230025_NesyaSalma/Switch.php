<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Penggunaan Kontrol Switch</h2>
    <h3>Nesya Salma</h3>
    <?php
    $angka_mutu=3;
    echo("Angka mutu $angka_mutu<br>");
    switch($angka_mutu)
    {
        case 0: echo ("Huruf mutu E"); break;
        case 1: echo ("Huruf mutu D"); break;
        case 2: echo ("Huruf mutu C"); break;
        case 3: echo ("Huruf mutu B"); break;
        case 4: echo ("Huruf mutu A"); break;
        default: echo ("Huruf mutu tidak dikenali");
    }  
    ?> 
</body>
</html>