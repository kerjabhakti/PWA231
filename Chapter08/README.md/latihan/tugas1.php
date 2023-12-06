<?php
function cekGanjilGenap($angka){
    if($angka % 2 == 0) {
        echo "Angka $angka adalah bilangan genap";
    } else {
        echo "Angka $angka adalah bilangan ganjil";
    }
}
// memanggil fungsi cekGanjilGenap dengan angka yang ingin di periksa
$angkaYangDiperiksa = 8; //ganti angka ini sesuai dengan angka yang ingin di periksa
cekGanjilGenap($angkaYangDiperiksa);
?>