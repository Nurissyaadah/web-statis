<?php
$nilai ="E";
if ($nilai == "A" ) {
    echo "Nilai anda $nilai, Anda <b>Istimewa</b>";
}   elseif($nilai == "B" ) {
    echo "Nilai anda $nilai, Anda <b>Baik</b>";
}   elseif($nilai == "C" ) {
    echo "Nilai anda $nilai, Anda <b>Cukup</b>";
}   elseif($nilai == "D")  {
    echo "Nilai anda $nilai, Anda <b>Kurang<b>";
}   elseif($nilai == "E")   {
    echo "Nilai anda $nilai, Anda <b>Sangat Kurang";
}   else {
    echo "Nilai anda $nilai, <b>Tidak ada predikat dengan huruf seperti itu</b>";
}

$nilai = "c";
if (strtoupper($nilai)== "A") {
    echo "Nilai Anda $nilai, anda <b>Istimewa</b>";
}   elseif (strtoupper($nilai)== "B") {
    
}