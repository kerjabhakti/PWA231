<!DOCTYPE html>
<html>
    <head>
        <title>Struktur PHP</title>
    </head>
    <body>
        <h2>
            Struktur Penulisan PHP
        </h2>
        <?php
        echo ("Hello world");
        ?>
        <h3>Tipe Data</h3>
        <?php
        $a="haloo";
        $b=1;
        $c=3.14;
        echo("\$a = $a<br>");
        echo("\$b = $b<br>");
        echo("\$c = $c<br>");
        echo("Tipe data \$a adalah ".gettype($a)."<br>");
        echo("Tipe data \$b adalah ".gettype($b)."<br>");
        echo("Tipe data \$c adalah ".gettype($c)."<br>");
        ?>
    </body>
</html>