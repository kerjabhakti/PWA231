<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol For</h2>
    <b>Nama Bulan :</b>
    <br>
    <?php
        $bulan=array("&nbspJanuri", "&nbspFebuari", "&nbspMaret", "&nbspApril", "&nbspMei",
        "&nbspJuni", "&nbspJuli", "&nbspAgustus", "&nbspSeptember", "&nbspOktober", "&nbspNovember", "&nbspDesember");
        for($i=0; $i<count($bulan); $i++)
        {
            echo(($i+1). "$bulan[$i] <br>");
        }
    ?>
</body>
</html>