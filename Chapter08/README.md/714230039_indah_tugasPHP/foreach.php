<html>
    <head>
        <title>foreach</title>
</head>
<body>
    <h2>kontrol foreach</h2>
    <b>nama Bulan : </br><br>
    <?php
    $i=0;
    $bulan=array("Januari","Februari","maret","April","mei","juni","juli","agustus","september","oktober","november","desember");
    foreach($bulan as $bln)
    {
        echo(($i+1)." $bln <br>");
        $i++;
    }
    ?>
    </body>
    </html>