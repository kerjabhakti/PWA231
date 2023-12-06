<html>
<head>
<title>Latihan 1</title>
</head>
<body>
<h2>Bilangan ganjil atau genap</h2>
<?php 
function bilanganganjilgenap($angka)
{
    if ($angka % 2 == 0)
    {
        return "Genap";
    } else {
        return "Ganjil";
    }
}
$angka = 7;
echo"angka $angka adalah bilangan " . bilanganganjilgenap($angka);
?>
</body>
</html>