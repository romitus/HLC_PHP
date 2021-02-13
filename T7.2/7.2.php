<?php


$A = 105;
$B = 234;
$C = 895.00;
$D = 234;

if ($B == $C) {
    echo "CIERTO, son IGUALES\n";
}

if($A == $C) {
    echo "FALSO, son diferentes \n";
}

if ($B <= $A) {
    echo "CIERTO, las dos variables son IGUALES\n";
}


if ($A > $B) {
    echo "FALSO, ".$A. " es menor que ".$B."\n";
}


if($B === $C) {
    echo "FALSO, son de distinto tipo\n";
}


if ($A < $B) {
    echo "CIERTO, ".$A." es menor que ".$B."\n";
}


if ($A != $B) {
    echo "CIERTO, son diferentes \n";
}


if ($B === $D) {
    echo "CIERTO, ".$B." y ".$D." son IGUALES y del mismo tipo \n";
}


if ($C != $D) {
    echo "FALSO, son IGUALES";
}











?>