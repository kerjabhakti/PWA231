<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif</title>
</head>
<body>
<h2>Penggunaan Kontrol Else If</h2>
<form>
<?php
    $nilai=80;
    echo("Nilai $nilai ");
    if($nilai>=85)
    {
        echo("Peringkat A");
    }elseif(($nilai>=75)and($nilai<85))
    {
        echo("Peringkat B");
    }elseif(($nilai>=65)and($nilai<75))
    {

        echo("Peringkat C");
    }elseif(($nilai >= 50)and($nilai<65))
    {
        echo("Peringkat D");
    }elseif($nilai < 50)
    {
        echo("Gradw E");
    }
?>
</form>
</body>
</html>