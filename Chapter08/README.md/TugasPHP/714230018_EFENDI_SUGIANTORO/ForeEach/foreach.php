<!DOCTYPE html>
<html lang="en">
<head>
    <title>foreach</title>
</head>
<body>
    <h2>Penggunaan Kontrol Foreach</h2>
    <b>Nama Bulan :</b><br>
    <?php
        $i=0;
         $bulan=array ("January","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September",
         "Oktober","November","Desember");
         foreach($bulan as $bln) 
         {
             echo (($i+1)." $bln <br>");
         }  
    ?>
    
</body>
</html>