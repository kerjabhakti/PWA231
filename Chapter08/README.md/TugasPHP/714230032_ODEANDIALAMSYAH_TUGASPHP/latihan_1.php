<html>
    <head>
        <title>latihan 1</title>
    </head>
    <body>
        <h2>penentuan bilangan ganjil dan genap</h2>
        <?php
        $angkaarray=array("1");
        function cekBilangan($angka)
        {
            if ($angka % 2 == 0) {
                echo "$angka adalah bilangan genap";
            } else if ($angka % 2 == 1) {
                echo "$angka adalah bilangan ganjil";
            } else {
                echo "error";
            }
        }
        foreach($angkaarray as $angka)
        echo(cekBilangan($angka)."<br>");
        ?>

    </body>
</html>