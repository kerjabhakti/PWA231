<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operator perbandingan</h2>
    <?php 
        $a = 15;
        $b = 7;
        
        printf("apakah $a > $b: %d <br>", $a > $b); // mengecek apakah variabel a lebih besar dari variabel yang dibandingkanya, jika ya maka mengahsilkan 1 (true)
        printf("apakah $a < $b: %d <br>", $a < $b); // mengecek apakah variabel a lebih kecil dari variabel yang dibandingkanya, jika ya maka mengahsilkan 1 (true)
        printf("apakah $a >= $b: %d <br>", $a >= $b); // mengecek apakah variabel a lebih besar atau sama dengan nilai variabel yang dibandingkanya, jika ya maka mengahsilkan 1 (true)
        printf("apakah $a <= $b: %d <br>", $a <= $b); // mengecek apakah variabel a lebih kecil atau sama dengan nilai variabel yang dibandingkanya, jika ya maka mengahsilkan 1 (true)
        printf("apakah $a <> $b: %d <br>", $a <> $b); // mengecek ketidaksamaan dalam nilai variabel
    ?>
</body>
</html>