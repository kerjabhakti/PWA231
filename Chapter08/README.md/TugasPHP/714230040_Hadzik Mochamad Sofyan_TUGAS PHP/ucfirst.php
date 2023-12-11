<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ucfirst()</h2>
    <p>mengubah huruf kapital pada kata pertama dalam suatu kalimat</p>

    <?php 
        $teks = "tuhan yang maha esa";
    ?>

    <p>teks: <?php echo $teks;?></p>
    <p>hasil: <?php echo ucfirst($teks);?></p>
</body>
</html>