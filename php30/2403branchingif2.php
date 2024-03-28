<?php
$nilai = "c";
if (strtoupper($nilai) == "A") {
    echo "Nilai Anda $nilai, anda <b>Istimewa</b>";
}   elseif (strtoupper($nilai)== "B") {
    echo "Nilai Anda $nilai, anda <b>Baik</b>";
}   elseif (strtoupper($nilai)== "C") {
    echo "Nilai anda $nilai, anda <b>Cukup</b>";
}   elseif (strtoupper($nilai)== "D") {
    echo "Nilai anda $nilai, anda<b>Kurang</b>";
}   elseif (strtoupper($nilai)== "E") {
    echo "Nilai anda $nilai, anda <b>Sangat Kurang</b>"
}   else {
    echo "Nilai anda $nilai, <b>Tidak ada predikat dengan huruf seperti itu</b>";
}
echo "<hr>";

// ternary if 
$gender="l"
echo (strtoupper($gender)=="L") ? "laki-Laki : "Perempuan";
echo "<h2>Penjelasan Nilai-Nilai </h2>"
$n = 55;
if ($n>=80 AND $n<= 100) {
    echo "Predikat: A";
if ($nilai >= 80 - 100) {
    echo "A";
}   elseif ($nilai >= 70-79.99) {
    echo "B";
}   elseif ($nilai >= 60-69.99) {
    echo "C";
}   elseif ($nilai >= 50-59.99) {
    echo "D";
}   elseif ($nilai >= 0-49.99) {
    echo "E";
}