<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pembelian = 100000;
        $diskon = 0;

        if ($pembelian>=100000)
        {
            $diskon=$pembelian*(25/100); 
        } elseif ($pembelian>=75000)
        {
            $diskon=$pembelian*(20/100); 
        } elseif ($pembelian>=50000)
        {
            $diskon=$pembelian*(15/100); 
        } elseif ($pembelian>=25000)
        {
            $diskon=$pembelian*(10/100); 
        } elseif ($pembelian>=10000)
        {
            $diskon=$pembelian*(5/100); 
        }

        $pembayaran=$pembelian - $diskon ;

        echo ("<pre>");
        echo ("Total pembelian = Rp." . $pembelian . "<br>");
        echo ("Diskon          = Rp." . $diskon . "<br>" );
        echo ("Pembayaran      = Rp." . $pembayaran     );
        echo ("</pre>");

    ?>
</body>
</html>