<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Switch</h2>
    <p>Logika lampu lalu lintas</p>
    <?php 
        $warna_lampu_lalulintas = "hijau";
        echo "warna lampu yang diinputkan: ". $warna_lampu_lalulintas. "<br>";
        switch($warna_lampu_lalulintas) {
            case "hijau": 
                echo "jalan";
                break;
            case "kuning":
                echo "hati hati";
                break;
            case "merah":
                echo "berhenti";
                break;
        }   
    ?>
</body>
</html>