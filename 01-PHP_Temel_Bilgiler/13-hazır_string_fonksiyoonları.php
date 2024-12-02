<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //strtolower => büyük metni ufak metne çevirir.

    echo $yazi="ALPER BILGIN KONYA TEKNIK UNIVERSITESI";
    echo "<br>";
    echo $yazi=strtolower($yazi);


    //strtolower => küçük metni büyük metne çevirir.

    echo "<br>";
    echo  $yazi=strtoupper($yazi);
    echo "<br>";
    echo $yazi=strtolower($yazi); //=> ufak metne çevirdik.


    //ucwords => metnin kelimelerinin ilk harflerini büyük yazar

    echo "<br>";
    echo  $yazi=ucwords($yazi);
    echo "<br>";
    echo $yazi=strtolower($yazi); //=> ufak metne çevirdik.


    //ucfirst => metnin ilk harfini büyük yazar

    echo "<br>";
    echo  $yazi=ucfirst($yazi);
    echo "<br>";

    //strlen => metnin karakter sayısını verir

    echo "<br>";
    //echo  "\$yazi değişkeninde olan karakter sayısı :".$yazi=strlen($yazi);
    echo "<br>";


    //substr => metnin belirtilen karakter sayıda kısmını alır.

    echo "<br>";
    echo  substr($yazi,0,10);
    echo "<br>";

    //Devamını oku uygulaması

    $yazi="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


    echo "<h1>Haber Başlığı</h1>";

    echo "<p>".substr($yazi,0,250)."...</p>";

    echo "<a href=\"#\">Devamını Oku</a>";
    ?>
</body>
</html>