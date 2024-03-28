<?php
$hari ="hujan";
switch (strtoupper ($hari)) {
    case 'HUJAN':
        echo "karena hari $hari, maka saya istirahat dirumah saja";
        break;

    case 'CERAH':
        echo "KARENA HARI $hari, maka saya berangkat kerja";
        break;

     default:
         echo "tidak ada acuan untuk $hari";
         break;
}
 echo "<hr>";

 