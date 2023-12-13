<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <p>Menjumlahkan himpunan bilangan genap dari range 1 - 10</p>
    <?php
    $i = 1;
    $range = 10;
    $total = 0;
        for ($i; $i <= $range; $i++) {
            if ($i % 2 == 0){
                $total += $i;
            }
        }
        echo $total;
    ?>
</body>
</html>