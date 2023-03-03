<?php

$nama = ["Adit","Ryan","Rendy","Tarisa"];
echo "$nama[3]","<br>";

$hobby = array ("basket","sepak bola","badminton","memasak");
echo "$hobby[3]","<br>";
print_r ($nama);

$angka = array (1,2,3,4);
echo "$angka[2]","<br>";
$total = array_sum($angka);
echo "$total","<br>";

$nama = ["Adit","Ryan","Rendy","Tarisa"];
foreach ($nama as $a) {
    echo $a,"<br>";
}

$angka1 = [10,20,30,40];
echo $angka1[1] = 100;
