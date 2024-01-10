<html>
    <head>
        <title>foreach php</title>
    </head>
    <body>
        <h2>penggunaan kontrol foreach</h2>
        <b>nama bulan :</b><br>
        <?php
        $bulan=array("januari","februari","maret","april","mey","juni","juli","agustus","september","oktober","november","desember");
        $i=0;
        foreach($bulan as $bln)
        {
            echo(($i+1).".$bln <br>");
            $i++;
        }
        ?>
    </body>
</html>