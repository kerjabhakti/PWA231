<html>
    <head>
        <title>if</title>
    </head>
    <body>
        <h2>penggunakan kontrol if dan else</h2>
        <?php
        $umur=15;
        echo("batasan usia mobil anda adalah $umur tahun"."<br>");
        if($umur>=21)
        {
            echo("belum melewati batasan");
        }

        else
        {
            echo("sudah melewati batasan");
        }
       
        ?>
    </body>
</html>