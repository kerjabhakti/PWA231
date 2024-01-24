<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 ganjil genap</title>
</head>
<body>
    <h2>Menentukan bilangan ganjil dan genap</h2>
    <?php
    $subjek = 15;
    ganjilgenap ($subjek);
    function ganjilgenap($number) {
        if ($number % 2 == 0) {
            echo ("$number adalah bilangan genap");
        } else {
            echo ("$number adalah bilangan ganjil");
        }
    }
    ?>
</body>
</html>