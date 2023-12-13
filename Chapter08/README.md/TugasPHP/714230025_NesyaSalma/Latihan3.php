<?php
$pembelian=95000;
$diskon=0;

if ($pembelian>=100000)
{
    $diskon=$pembelian*(25/100);
}elseif ($pembelian>=75000)
{
    $diskon=$pembelian*(20/100);
}elseif ($pembelian>=5000)
{
    $diskon=$pembelian*(15/100);
}elseif ($pembelian>=25000)
{
    $diskon=$pembelian*(10/100);
}elseif ($pembelian>=10000)
{
    $diskon=$pembelian*(5/200);
}
$pembayaran=$pembelian-$diskon;
echo("<pre>");
echo("Total pemelian = Rp.".$pembelian."<br>");
echo("Diskon = Rp.".$diskon."<br>");
echo("Total Pembayaran = Rp.".$pembayaran);
echo("</pre>");
?>
