<?php
// Membuat variabel
$a = 25;
$b = 5;
$r = 10; // Untuk lingkaran dan tabung, kita tambahkan variabel jari-jari $r

// Rumus untuk Luas Segitiga
$luasSegitiga = 0.5 * $a * $b;

// Rumus untuk Keliling Segitiga (asumsi segitiga siku-siku)
$kelilingSegitiga = $a + $b + sqrt($a**2 + $b**2);

// Rumus untuk Luas Lingkaran
$luasLingkaran = M_PI * $r**2;

// Rumus untuk Volume Tabung
$tinggiTabung = 8; // Anda bisa mengganti tinggi sesuai kebutuhan
$volumeTabung = M_PI * $r**2 * $tinggiTabung;

// Menampilkan hasil
echo "Luas Segitiga: " . $luasSegitiga . "<br>";
echo "Keliling Segitiga: " . $kelilingSegitiga . "<br>";
echo "Luas Lingkaran: " . $luasLingkaran . "<br>";
echo "Volume Tabung: " . $volumeTabung . "<br>";
?>