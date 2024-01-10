<html>
    <head>
        <title>for php</title>
    </head>
    <body>
        <h2>penggunaan kontrol for</h2>
        <b>nama bulan :</b><br>
        <?php
        $bulan=array("januari","februari","maret","april","mey","juni","juli","agustus","september","oktober","november","desember");
        $i=0;
        for($i=0; $i<count ($bulan); $i++)
        {
            echo(($i+1).".$bulan[$i]"."<br>");
        }
        ?>
    </body>
</html>