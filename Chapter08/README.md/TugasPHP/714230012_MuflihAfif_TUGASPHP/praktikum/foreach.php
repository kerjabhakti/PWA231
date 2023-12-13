<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol Foreach</h2>
    <b>Nama Bulan :</b><br>
    <?php
    $i=0;
    $bulan=array("&nbspJanuri", "&nbspFebuari", "&nbspMaret", "&nbspApril", "&nbspMei",
    "&nbspJuni", "&nbspJuli", "&nbspAgustus", "&nbspSeptember", "&nbspOktober", "&nbspNovember", "&nbspDesember");
    foreach ($bulan as $bln)
    {
        echo ($i + 1). ". $bln <br>";
        $i++;
    }
    ?>
</body>
</html>