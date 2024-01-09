<html>
<head>
    <title>PHP Tugas 01 M Haitsam Izzuddin Azman</title>
</head>
<body>
    <h2>Tugas 01</h2>
<pre>
<?php
    $angka = 10;
    cekganjilgenap ($angka);
    function cekganjilgenap ($angka)
    {
        if ($angka% 2 == 0) {
            echo ("$angka adalah bilangan genap.");
        } else {
            echo ("$angka adalah bilangan ganjil.");
        }
    }
?>
<pre>
</body>
</html>