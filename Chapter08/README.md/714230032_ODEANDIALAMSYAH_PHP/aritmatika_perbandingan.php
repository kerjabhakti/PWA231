<html>
<head>
    <title>aritmatika</title>
</head>
<body>
    <h2>penggunakan aritmatika</h2>
    <!-- 
Tabel operator aritmatika
Operator Kegunaan Prioritas
operator,kegunaan,prioritas
+ Penjumlahan Ketiga
- Pengurangan Ketiga
* Perkalian Kedua
/ Pembagian Kedua
% Sisa pembagian Kedua
++ Penaikan Pertama
-- Penurunan Pertama -->
    <pre>
        <?php
        $a=7;
        $b=2;
        echo("hasil dari $a+$b adalah ".($a+$b)."<br>");
        echo("hasil dari $a-$b adalah ".($a-$b)."<br>");
        echo("hasil dari $a*$b adalah ".($a*$b)."<br>");
        echo("hasil dari $a/$b adalah ".($a/$b)."<br>");
        echo("hasil dari $a%$b adalah ".($a%$b)."<br>");
        ?>
    </pre>
    <!--
        Operator Keterangan
== Sama dengan
< Kurang dari
> Lebih dari
<= Kurang dari atau sama dengan
>= Lebih dari atau sama dengan
!= Tidak sama dengan
<> Tidak sama dengan  
    <pre>
        <?php
        $p=2;
        $t=3;
        echo($p < $t."<br>");
        if($p=2 < $t=3)
        {
            echo'perbandingan dari $p < $t benar';
        }
        else
        {
            echo'salah';
        }
        ?>
    </pre>
</body>
</html>