<html>
    <head>
        <title>switch</title>
    </head>
    <body>
        <h2>penggunaan kontrol switch</h2>
        <?php
        $angkamutu=5;
        echo("angka mutu $angkamutu <br>");
        switch($angkamutu)
        {
            case 0: echo("huruf mutu F"); break;
            case 1: echo("huruf mutu E"); break;
            case 2: echo("huruf mutu D"); break;
            case 3: echo("huruf mutu C"); break; 
            case 4: echo("huruf mutu B"); break;
            case 5: echo("huruf mutu A"); break;
            default: echo("tidak dikenali");
        }
        ?>
    </body>
</html>