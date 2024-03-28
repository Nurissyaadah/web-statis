<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
    <link rel="shortcut icon" href="../html5/images.jpeg" type="image x-icon">
</head>
<body>
    <h1>Belajar PHP</h1>
    <?php
        echo "Nurissya'adah";
        echo "<br>";
        print "Teknik Komputer dan Jaringan";

        // variabel adalah simbol untuk menyimpan nilai
        echo "<h1>Variabel</h1>";
        $nm = "Rumah Gemilang Indonesia";
        echo "Saya belajar di $nm";
        echo "<h2>";

        $a= 15;
        $b= 2;
        echo "$a+$b = " . ($a+$b);
        echo "<br>";
        $a = 50;
        echo "$a : $b = " . ($a/$b) . "<br>";
        echo "$a % $b = " . ($a%$b) . "<br>";
        echo "$a - $b = " . ($a-$b) . "<br>";
        echo "$a x $b = " . ($a*$b) . "<br>";
    ?>

</body>
</html>