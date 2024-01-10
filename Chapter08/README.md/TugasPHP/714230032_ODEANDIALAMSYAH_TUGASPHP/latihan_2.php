<html>
    <head>
        <title>latihan 2</title>
    </head>
    <body>
        <h2>latihan 2</h2>
        <?php
        $jumlah=0;
        $i=0;  
        for ($i=0; $i<=6;$i+=2)
        {
            $jumlah += $i; 
        } 
        echo("Jumlah bilangan genap dari 0 s.d 6 adalah: " . $jumlah);
        ?>
    </body>
</html>