<?php
$siswa = array (
    'tb'=>'Fitri',
    'fv'=>'Lintang',
    'dg'=>'Wami',
    'tkj1' =>"Rif'at",
    'tkj2' =>"Thoriq",
    'ap'=>'Indriyani',
    'tsm'=>'Muqoddas'
);
array_push($siswa, "Nita");
echo $siswa[0];
echo "<hr>";
print_r($siswa);

echo "<h1>Array Multimdimensi</h1>";
$histogram = [
    [1,2,3,4,5],
    [6,7,8,9,2],
    [3,5,1,0,5],
    [5,8,1,3,1]
];
echo $histogram[1][3];
echo "<hr>";
foreach($histogram as $h) {
    foreach ($h as $value)  {
        echo $value."<br>";
    }
}
print_r($histogram);
