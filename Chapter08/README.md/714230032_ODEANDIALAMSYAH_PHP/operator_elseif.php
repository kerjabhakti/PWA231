<html>
    <head>
        <title>if</title>
    </head>
    <body>
    <h2>penggunakan kontrol if</h2>
    <!-- Struktur elseif mengharuskan pemeriksaan kembali apabila nilai ekspresi berisi salah. -->
    <form>    
        <?php
        $umur=17;
        echo("usia $umur "."<br>");
        if($umur>=50)
        {
            echo("umur lansia");
        }elseif(($umur>=18)and($umur>=40))
        {
            echo("umur dewasa");
        }elseif(($umur>=12)and($umur>=17))
        {
            echo("umur remaja");
        }elseif(($umur>=6)and($umur>=11))
        {
            echo("umur anak-anak");
        }elseif(($umur>=3)and($umur>=5))
        {
            echo("umur balita");
        }elseif(($umur>=0.5))
        {
            echo("umur bayi");
        }
       
        ?>
    </form>    
    </body>
</html>