<?php

$nilai = 88;

if($nilai > 85) {
    $grade = "A";
} elseif ($nilai > 75) {
    $grade = "B";
} elseif ($nilai > 65) {
    $grade = "C";
} elseif ($nilai > 50) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "nilai anda : $nilai<br>";
echo "grade : $grade<br>";

$level = 3;
echo "level kamu : $level<br>";

switch($level) {
    case 1:
        echo "pelajari html";
        break;
    case 2: 
        echo "pelajari css";
        break;
    case 3:
        echo "pelajari javascript";
        break;
    case 4: 
        echo "pelajari php";
        break;
    default:
        echo "kamu bukan programmer";
}