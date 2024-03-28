<!DOCTYPE html>
<head><title>Belajar PHP</title></head>
</html>
<?php
    echo "<h2>Tipe Data String</h2>";
    $nama="Nurissya'adah";
    echo "Halo, Perkenalkan nama saya $nama<br>";
    echo "<h2>Tipe Data Integer</h2>";
    echo "Penjumlahan dan Pengurangan<br>";
    $bil1=7;
    $bil2=9;
    $hasil1=$bil1+$bil2;
    $hasil2=$bil2-$bil1;
    echo "penjumlahan dari $bil1+$bil2 adalah = $hasil1<br>";
    echo "pengurangan dari $bil2-$bil1 adalah = $hasil2<br>";
    echo "<h3>Nilai Ulangan Harian Siswa</h3>";
     $nilai1 =9.5;
     $nilai2 =8.5;
     $nilai3 =7.5;
     $rata2 = ($nilai1+$nilai2+$nilai3) /3;
     echo "Nilai Ulangan Harian Matematika anda adalah : $nilai1<br>";
     echo "Nilai Ulangan Harian Bahasa Indonesia anda adalah : $nilai2<br>";
     echo "Nilai Ulangan Harian Biologi anda adalah : $nilai3<br>";
     echo "Nilai Rata-rata Ulangan Harian anda adalah&nbsp;: $rata2<br>";

     echo "<h2>Tipe Data Boolean</h2>";
     $siswalulus= true;
     $siswaujian= false;
//var dump menampilkan tipe data
    var_dump($siswalulus);
    echo "<br>";
    var_dump($siswaujian);

    echo "<h2>Tipe Data Array</h2>";
    $listsiswa = [ "Agung", "Agus", "Bayu", "Budi", "Rama", "Rahmat" ];
    //Pembagian 1 kelompok : 2orang
    echo $listsiswa[0];
    echo " berkelompok dengan $listsiswa[5]<br>";
    echo $listsiswa[1];
    echo " Berkelompok dengan $listsiswa[2]<br>";
    echo $listsiswa[4];
    echo " berkelompok dengan $listsiswa[3]<br>";
?>
