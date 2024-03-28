<?php
echo "<h2>Bilangan Fibonat</h2>";
// by Nurissya'adah
function fibbonaci(int $jumlahBilangan) {
      $fibbonaci = [];
      for ($i = 0; $i < $jumlahBilangan; $i++); {
           if($i<2) {
             $bilangan = $i;
           } else {
            $bilangan = $fibbonaci[$i-1] + $fibbonaci[$i-2];
           }
           array_push($fibbonaci, $bilangan);
        }
           return $fibbonaci;
} 

echo implode("", fibbonaci(20)) . '<br>';