<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi : String</title>
</head>
<body>
    <h2>Fungsi : String Strtolower</h2>
    <?php
        $string = "Pemrograman Web PHP";
        $word = strtolower($string);
        echo("<i>\"$string\"</i> <br>");
        echo("Hasil Strtolower adalah <i>\"$word\"</i>");
    ?>
</body>
</html>