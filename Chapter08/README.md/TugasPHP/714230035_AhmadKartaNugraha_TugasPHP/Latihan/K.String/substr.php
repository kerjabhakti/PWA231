<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi : String</title>
</head>
<body>
    <h2>Fungsi : String Substr()</h2>
    <?php
    $string = "Pemrograman Web PHP";
    $word = substr($string,16,3);
    echo("<i>\"$string\"</i> <br>");
    echo("Hasil Substr (16,3) adalah $word");
    ?>
</body>
</html>