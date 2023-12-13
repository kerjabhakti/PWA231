<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Else If</h2>
    <p>Grade nilai</p>
    <?php 
        $nilai = 100;

        if ($nilai >= 85 && $nilai <= 100) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nilai anda: A";
        } else if ($nilai >= 80 && $nilai <= 85) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nilai anda: B";
        }  else if ($nilai >= 70 && $nilai <= 80) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nilai anda: AB";
        } else if ($nilai >= 60 && $nilai <= 70) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nilai anda: C";
        } else if ($nilai >= 50 && $nilai <= 60) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nila anda: D";
        } else if ($nilai >= 0 && $nilai <= 50) {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Nilai anda: E"; 
        } else {
            echo "nilai yang diinputkan: ". $nilai. "<br>";
            echo "Tidak dapat mengindikasikan nilai yang diinput, karena hanya dapat mengindikasikan 0 - 100";
        }
    ?>
</body>
</html>