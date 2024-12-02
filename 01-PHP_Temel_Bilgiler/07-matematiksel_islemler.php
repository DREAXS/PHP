<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Matematiksel işlemler
    + Toplama İşlemi
    - Çıkarma İşlemi
    / Bölme İşlemi
    * Çarpma İşlemi
    */

    $numara1=50;
    $numara2=13;
    echo "Numara1: ".$numara1;
    echo"<br>";
    echo "Numara2: ".$numara2;
    echo "<br>";
    echo "<hr>";   

    echo $numara1+$numara2;    
    echo "<br>";
    echo "<hr>";

    echo "Toplama İşlemi";
    $topla=$numara1+$numara2;
    echo "<br>";
    echo "$numara1 + $numara2 = $topla";
    echo "<br>";
    echo "<hr>";

    echo "Çıkarma İşlemi";
    echo "<br>";
    $cikar=$numara1-$numara2;
    echo "$numara1 - $numara2 = $cikar";
    echo "<br>";
    echo "<hr>";

    echo "Bölme İşlemi";
    echo "<br>";
    $bolme=$numara1/$numara2;
    echo "$numara1 / $numara2 = $bolme";
    echo "<br>";
    echo "<hr>";

    echo "Çarpma İşlemi";
    echo "<br>";
    $carpma=$numara1*$numara2;
    echo "$numara1 * $numara2 = $carpma";
    echo "<br>";
    echo "<hr>";
    ?>
</body>
</html>