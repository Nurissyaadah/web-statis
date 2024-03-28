<?php
    echo "<h2>Nilai Raport Siswa</h2>";
    $nilai=80;
    $lulus= $nilai >= 80;
    echo "Nilai anda $nilai, Anda $lulus<br>";

    echo "Equal & Identik<br>";
    // == sama secara equal
    // == sama secara identik
    // == tidak sama secara equal
    // !== tidak sama secara identik
    // <> sama dengan operator !>
    var_dump(10 == "10");
    echo "<br>" ;
    var_dump(10 === "10");
    echo "<br>";
    var_dump(10 === 10);
    echo "<br>";
    var_dump(10 != "10");
    echo "<br>";
    var_dump(10 !== "10");
    echo "<br>";
    var_dump(10 <> "10");
    echo "<br>";

    //Operator Logika ada 3
    // && atau and
    // !! atau or
    // !, not negasi
?>