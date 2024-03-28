<?php
function luasLingkaran($r){
    $pi = 3.14;
    echo "Diketahui nilai r = {sr}<br>";
    echo "Luas Lingkaran = pi * r * r<br>";
    echo "Luas Lingkaran = {$pi} * {$r} *{$r}<br>";
    echo "Luas Lingkaran = " . ($pi*$r*$r);
}

// Buatkan fungsi Luas segitiga
function luasSegitiga(int $a=null, $t=null) {
    if(!$a && !$t) {
        $a=$t=25;
    }
    echo "Diketahui nilai alas = {$a}<br>";
    echo "Diketahui nilai tinggi = {$t}<br>";
    echo "Luas Segitiga = 1/2 * alas *tinggi<br>";
    echo "Luas Lingkaran = 0.5 * {$a} * {$t}<br>";
    echo "Luas Lingkran = ". (0.5*$a*$t);
}