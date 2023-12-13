<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Latihan 1</h2>
    <p>menampilkan bilangan ganjil dengan bilangan genap</p>
    <?php 
        $angka1 = 2;
        $angka2 = 5;

        function cekBilangan($angka){
            if ($angka % 2 == 0) {
                echo "$angka adalah bilangan genap";
            } else if ($angka % 2 == 1) {
                echo "$angka adalah bilangan ganjil";
            } else {
                echo "yang anda inputkan bukanlah angka";
            }
        }
    ?>
    <p>angka: <?php echo $angka1?></p>
    <p><?php echo cekBilangan($angka1);?></p>
    <p>angka: <?php echo $angka2?></p>
    <p><?php echo cekBilangan($angka2);?></p>
</body>
</html>