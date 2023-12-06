<html>
    <head>
        <title>latiihan</title>
    </head>
    <body>
    <h2>latihan 3</h2>
    <form>    
        <?php
        $harga=200000;
        $diskon=0;
        if($harga>=300000)
        {
        $diskon=$harga*(25/100);
        }
        elseif($harga>=250000)
        {
        $diskon=$harga*(25/100);
        }
        elseif($harga>=200000)
        {
        $diskon=$harga*(20/100);
        }
        elseif($harga>=150000)
        {
        $diskon=$harga*(15/100);
        }
        elseif($harga>=100000)
        {
        $diskon=$harga*(10/100000);
        }
        $totalharga=$harga-$diskon;
        echo("<pre>");
        echo("pembelian produk t =". $harga."<br>");
        echo("diskon =". $diskon."<br>");
        echo("total pembayaran =". $totalharga."<br>");
        echo("</pre>")
        ?>
    </form>    
    </body>
</html>