<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nama = "Hadzik Mochamad Sofyan";
        $usia = 19;
        $tinggi = 180.5;

        echo("\$nama - $nama <br>");
        echo("\$usia - $usia <br>");
        echo("\$tinggi - $tinggi <br>");
        echo("Tipe data variabel \$nama adalah " . "<strong>" . gettype($nama) . "</strong>" ."<br>");
        echo("Tipe data variabel \$usia adalah " . "<strong>" . gettype($usia) . "</strong>" . "<br>");
        echo("Tipe data variabel \$tinggi adalah " . "<strong>" . gettype($tinggi) . "</strong>" . "<br>");
    ?>
</body>
</html>