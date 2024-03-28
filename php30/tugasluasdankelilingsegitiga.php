<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kode PHP Luas dan keliling segitiga</title>
  <style>
    body   { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2  { margin-bottom: 0; }
    hr     { width: 80%; }
    form   { margin-top: 2rem; }
    canvas { margin: 1.4rem; }
    p      { margin:0.1rem }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Kode Program PHP - Keliling dan Luas Segitiga</h1>
  <hr>
  <form action="" method="post">
    <div>
      Alas segitiga: <input type="text" name="alas" size="1">
      Tinggi segitiga: <input type="text" name="tinggi" size="1">
      <input type="submit" name="submit">
    </div>
  </form>
   
    <?php
      if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
 
        echo "<div class='result'>";
        echo "<h2>Hasil Kode Program</h2>";
        echo "<span>(alas: $alas, tinggi: $tinggi)</span>";
    ?>
        <canvas id="myCanvas" width="100px" height="100px"></canvas>
        <script>
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          ctx.beginPath();
          ctx.moveTo(100,100);
          ctx.lineTo(0,100);
          ctx.lineTo(0,0);
          ctx.closePath();
          ctx.stroke();
        </script> 
    <?php
        $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
        $keliling_segitiga = $alas + $tinggi + $sisi_miring;
        $luas_segitiga = 1/2 * $alas * $tinggi;
 
        echo "<p>Sisi miring segitiga = ". round($sisi_miring,2) ." </p>";
        echo "<p>Keliling segitiga = ".round($keliling_segitiga,2)."</p>";
        echo "<p>Luas segitiga = ". round($luas_segitiga,2) ."</p>";
        echo "</div>";
      }
    ?>
   
</body>
</html>