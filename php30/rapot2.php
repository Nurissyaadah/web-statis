<?php

$nilai =49;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 85 and $nilai <= 100) {
  echo "Predikat: A";
} elseif ($nilai >= 75) {
  echo "Predikat: B";
} elseif ($nilai >= 60) {
  echo "Predikat: C";
} elseif ($nilai >= 50) {
  echo "Predikat: D";
} elseif ($nilai >= 0)  {
  echo "Predikat: E";
} else {
  echo "Nilai tidak valid.";
}
if ($nilai >=60 and $nilai <=100) {
    echo "<br><br>Selamat, Anda lulus</br>";
}   elseif ($nilai >=50 and $nilai <60) {
    echo "<br><b>Anda Her</b>";
}   else{
    echo "<br><b>Maaf,Anda tidak lulus</b>";
}
?>