<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Do While</h2>
    <p>List Aplikasi Sosial Media</p>
    <?php 
    $i = 1;
    $data = ["Instagram", "Facebook", "WhatsApp", "X", "GitHub", "LinkedIn"];
    
    // pada do while, jika bernilai false program akan mengeksekusi syntax dalam blok do
    // do while sangat terasa manfaatnya jika menggunakan if else di dalamnya
    do {
        // kondisi yang dijalankan jika nilai boolean true
        if ($i > 5) { // 2.a hanya memunculkan satu data  pada index[0] ketika nilai i > 5
            echo $data[0];
        // kondisi yang dijalankan jika nilai boolean false
        } else { // 2.b menghandle ketika range nilai i > 5
            echo $data[$i]. "<br>";
            $i++;
        } 
    } while ($i <= 5); // 1. mengecek apakah i < atau = 5
                      // jika bernilai true if statement di jalankan
                      // jika bernilai false else statement di jalankan
    ?>
</body>
</html>