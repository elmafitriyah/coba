<?php

$bil=15;

if($bil % 2 == 0) {
    echo "$bil Merupakan Bilangan Genap";
}else {
    echo "$bil Merupakan Bilangan Ganjil","<br>";
}

$pembelian=200000;

if ($pembelian>100.000) {
    $diskon=$pembelian/20;
    $total=$pembelian-$diskon;
    echo "total pembelian adalah $total";
}else {
    echo "total pembelian adalah $pembelian";
}
echo "<br>";

//cara kedua

$harga=220000;

if($harga<100000) {
    echo "tidak dapat potongan";
}else {
    echo "anda mendapat potongan 5%","<br>";
    $harga=$harga-($harga*5/100);
    echo "total anda $harga","<br>";
}

$a=10;
$b=5;
$hasil = $a/$b;
if($b==0){
    echo "pembagian tidak dilakukan";
}else {
    echo "hasil = $hasil","<br>";
}

$a=8;
$b=4;

if($a<0 || $b<0){
    echo "tidak dapat dijalankan";
}else {
    $hasil=$a-$b;
    echo "$hasil";
}
?>
