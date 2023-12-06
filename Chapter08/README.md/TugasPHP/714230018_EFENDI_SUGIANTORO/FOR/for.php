<!DOCTYPE html>
<html lang="en">
<head>
    <title>for</title>
</head>
<body>
    <h2> Penggunaan Kontrol For</h2>
    <?php
        $bulan=array ("January","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September",
        "Oktober","November","Desember");
        for($i=0;$i<count($bulan);$i++) 
        {
            echo (($i+1)." $bulan[$i] <br>");
        }  
        
        
        ?>
</body>
</html>