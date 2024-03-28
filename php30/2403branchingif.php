<?php
$hari = "Spesial";
if ($hari == "Spesial") {
    echo "Selamat siang, hari yang Spesial";
} else {
    echo "Hari Hujan";
}
echo "<hr>";

// Coba buat IF Else seperti diatas dengan syarat
// Jika $nilai 8 -100 = A
// 70-79.99 = B
// 60-69.99 = c
// 50-59.99 = D
//  0-49.99 = E

$nilai = 70;
if ($nilai >= 60) {
    echo "Selamat, Anda Lulus";
}   else {
    echo "Tidak Lulus";
}
echo "<hr>";

echo "<h2>Penjelasan Nilai-Nilai Terkecil </h2>"
$n = 100;
if ($n>=80) {
    echo "Nilai Anda $n, nilai <b>A</b>";
} elseif ($n>=70) {
    echo "Nilai Anda $n, nilai <b>B</b>";
} elseif ($n>=60) {
    echo "Nilai Anda $n, nilai <b>C</b>";
} elseif ($n>=50) {
    echo "Nilai Anda $n, nilai <b>D</b>";
} elseif ($n>=0) {
    echo "Nilai Anda $n, nilai <b>E</b>";
}  else {
     echo "Nilai Anda $n, nilai tidak dikenal";
}
echo "<hr>";

echo "<h2>Penjelasan Nilai-Nilai Terbesar</h2>";
$n = 100
if ($n<50) {
    echo "Nilai anda $n, nilai <b>E</b>";
}  elseif ($n<60) {
     echo "Nilai Anda $n, nilai <b>D</b>";
}  elseif ($n<70) {
     echo "Nilai Anda $n, nilai <b>C</b>";
}  elseif ($n<80) {
     echo "Nilai Anda $n, nilai <b>B</b>";
}  elseif ($n<=100) {
    echo "Nilai Anda $n, nilai <b>A</b>";
}  else {
     echo "Nilai Anda $n, nilai tidak dikenal";
}