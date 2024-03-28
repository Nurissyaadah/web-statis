<?php
echo "<h1>Do While</h1>";
$a=11;
do {
    echo "Sa. Do TKJ<br>";
    $a++;
} while ($a <= 10);

echo "<h1>While<?h1>";
$b=10;
while ($b <= 10){
    echo "$b. While TKJ<br>";
    $b++;
}

echo "<h1>For</h1>";
for ($i=1; $i <= 100; $i++) {
    if($i === 4) {
        $i++;
        continue;
    }
    if ($i === 10) {
         break;
    }
    echo "$i. For TKJ<br>";
}

echo "<h1>Break and Continue pada Looping</h1>";
# kita mulai dari angka 1
$i = 1;

# perulangan akan dilakukan selama variabel 


