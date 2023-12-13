<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol Else If</h2>
    <?php
        $nilai= 80;
        echo("Nilai $nilai");
        if($nilai>=85)
        {
            echo "&nbspGrade A";
        }elseif (($nilai>=75)and($nilai<85))
        {
            echo "&nbspGrade B";
        }elseif (($nilai>=65)and($nilai<75))
        {
            echo "&nbspGrade C";
        }elseif (($nilai>=50)and($nilai<65))
        {
            echo "&nbspGrade D";
        }elseif ($nilai<50)
        {
            echo "&nbspGrade E";
        }
    ?>
</body>
</html>
