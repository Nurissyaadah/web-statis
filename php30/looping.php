<?php
echo "<h3>For</h3>";
    for($x=1; $x<=10; $x++){
        echo "Pengulangan Kata menggunakan for<br>";
    }
    for($x2=10; $x2>0; $x2--){
        echo "Perhitungan mundur ke$x2 menggunakan for<br>";
    }
echo "<br>";
$listsiswa = ['Agus', 'Agung', 'Budi'];
for ($n=0; $n < count($listsiswa); $n++){
    echo "Nama Siswa : {$listsiswa[$n]} <br>";
}
echo "<br>";
$namasiswa = ['Budi', 'Agus', 'Agung'];
foreach ($namasiswa as $siswa) {
    echo "Nama Siswa : {$siswa} <br>";
}
foreach ($namasiswa as $key => $siswa) {
    echo "[{$key}] Nama Siswa: {$siswa} <br>";
}    
//pengulangan while
echo "<h3>While</h3>";
$while = 1;
while($while <=10 ){
    echo "Perulangan ke- {$while} <br>";
    $while++;
}
//pengulangan do while
echo "<h3>Do While</h3>";
$do = 10;
do{
    echo "$do <br>";
    $do++;
}while ($do >=1);
?>