<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>If</h2>
    <p>pada case ini adalah tentang wahana roller coaster, syaratnya adalah, jika tinggi badan lebih dari 120cm boleh menaiki wahana ini</p>
    <?php 
        $tinggi = 180;

        if ($tinggi >= 120) {
            echo "tinggi badan yang diinputkan: ". $tinggi . "<br>";
            echo "Anda dapat menaiki wahana Roller Coaster";
        }
    ?>
</body>
</html>