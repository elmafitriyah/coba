<?php
function luas(){
    $p=5;
    $l=7;
    echo $p*$l;
}
luas();
echo"<br>";

function luas2($p,$l){
    echo $p*$l;
}
luas2 (4,5); 
echo"<br>";

function luas3($p,$l){
    $hasil=$p*$l;
    return $hasil;
}
echo luas3(5,8),"<br>";
$a = luas3(5,8);
$t=10;
$volume = $a*$t;
echo$volume;
