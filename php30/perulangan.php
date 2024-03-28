<?php
// FOR
// $i=$i+1 == $i+=1 == $i++
for ($i=1; $i <= 100; $i+=10) :
    echo "$i. Kelas TKJ A30<br>";
endfor;

echo "<hr>";
// WHILE
$a = 10;
while ($a > 0) {
    echo "$a. Belajar While<br>";
    $a--;
}

// DO WHILE
echo "<h1>DO WHILE</h1>";
$b = 1;
do {
    echo "$b. Belajar DO WHILE<br>";
    $b+=3;
} while ($b <=10);

echo "<h1>Belajar Do While</h1>";
for ($i=500; $i > 0; $i++) :
    echo "$i.Nuris<br>";
endfor;