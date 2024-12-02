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
    -Değişkenler $ işareti ile başlar
    -Değişkene değer ataması yapılırken = işareti kullanılır
    -Değişkene metinsel ifadeler aktarılırken " " veya ' ' kullanılabilir.
    -Değişkene integer sayısal değer aktarılırken direkt olarak yazabiliriz.
    -Değişkenlerde ufak büyük harf ayrımı vardır.
    -Değişkenlerde rakam ile başlamıyoruz. Ama rakam ile bitirebiliyoruz. Özel karakterlerde dahildir.
    -Değişkenlerde boşluk bırakmıyoruz.
    - Değişkenler _ alt çizgi kullanabiliriz.
    - Değişkenler Türkçe karakter kullanmıyoruz.
    */

    $ad="Alper";
    $soyad="Bilgin";
    $no=500;
    $adSoyad="AlperB";

    echo $adSoyad;
    echo "<br>";
    echo $ad.$soyad;

    $ad="ALPER";
    echo"<br>";
    echo $ad;
    
    ?>
</body>
</html>