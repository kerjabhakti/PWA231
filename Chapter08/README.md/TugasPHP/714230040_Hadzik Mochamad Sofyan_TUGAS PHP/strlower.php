<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>stsrtolower()</h2>
    <p>mengubah teks dengan huruf kapital menjadi kecil</p>
    <?php 
        $teks = "HELLO WORLD";
    ?>
    <p>teks: <?php echo $teks;?></p>
    <p>hasil: <?php echo strtolower($teks);?></p>
</body>
</html>