<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>strlen()</h2>
    <p>Menghitung banyaknya karakter pada suatu teks "hello world", termasuk spasi</p>

    <?php 
        $teks = "hello world!";
    ?>

    <p>teks: <?php echo $teks;?></p>
    <p>panjang karakter: <?php echo strlen($teks);?></p>
</body>
</html>