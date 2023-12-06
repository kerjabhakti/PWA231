<html>
    <head>
        <title>fungsi php</title>
    </head>
    <body>
        <h2>penggunaan fungsi php</h2>
        <?php
        function hitung($a,$b)
        {
            $hasil=$a+$b;
            return $hasil;
        }
        echo("1 + 3 =". hitung(1,3));
        ?>
    </body>
</html>