<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>substr()</h2>
    <p>Memotong dan memisahkan isi teks pada "JavaScript" menjadi "Script' menggunakan method substr()</p>
    <?php 
        $teks = "JavaScript";
    ?>
    <p>teks: <?php echo $teks;?></p>
    <!-- menampilkan teks dari urutan index ke 4 -->
    <p>hasil: <?php echo substr($teks, 4);?></p> 
</body>
</html>