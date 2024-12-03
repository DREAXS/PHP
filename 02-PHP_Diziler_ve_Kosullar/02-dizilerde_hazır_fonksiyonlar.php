<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //sort => küçükten büyüğe doğru sıralar
    $dizi=array(10,9,8,7,6,12,5,4,3,2,1);
    echo "<pre>";
    sort($dizi);
    print_r($dizi);
    echo "</pre>";


    //rsort => büyükten küçüğe doğru sıralar
    $dizi=array(10,9,15,101,8,7,6,12,5,4,3,2,1);
    echo "<pre>";
    rsort($dizi);
    print_r($dizi);
    echo "</pre>";


    //rsort => büyükten küçüğe doğru alfabetik sıralama
    $dizi=array("a","b","c","d");
    echo "<pre>";
    rsort($dizi);
    print_r($dizi);
    echo "</pre>";
    echo "<hr>";

    //in_array => dizi içerisinde aradığımız değerin olup olmadığını denetler. Varsa 1 değerini döndürür.
    $dizi=array("a","b","c","d");
    echo $sonuc=in_array("z",$dizi);
    if ($sonuc) {
        echo "var";
    } 
    else {
        echo "yok";
    }

    echo "<br>";
    //implode dizi değerlerini birleştirmeye yarar
    $dizi=array("a","b","c","d");
    $sonuc=implode(",",$dizi);
    echo $sonuc;

    //explode değişkeni parçalayarak dizi haline getirir.
    echo "<br>";
    $zaman="27-10-2017 19:08";
    $sonuc=explode(" ",$zaman);
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    echo "<br>";

    echo "Tarih : ".$sonuc[0]." Saat:.".$sonuc[1];
    echo "<hr>";

    //Date Time Zone Ayarları ve anlık zaman alma
    date_default_timezone_set('Europe/Istanbul');
    echo $zaman=date("d-m-y h:i:s");
    $sonuc=explode(" ",$zaman);
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    echo "<br>";

    echo "Tarih : ".$sonuc[0]." Saat:.".$sonuc[1];

    ?>
</body>
</html>