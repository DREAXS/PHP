<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // Koşulların açıklamalı bir örneği

    $sayi = 25;  // Sayı değişkeni
    $renk = "Kırmızı";  // Renk değişkeni
    $yas = 20;  // Yaş değişkeni
    $ad = "Ali";  // Ad değişkeni
    $deger = "";  // Boş bir değer

    // 1. Basit if koşulu
    if ($sayi > 10) {
        echo "Sayı 10'dan büyüktür.<br>";
    }

    // 2. if-else yapısı
    if ($yas >= 18) {
        echo "Yasınız 18 veya daha büyük.<br>";
    } else {
        echo "Yasınız 18'den küçük.<br>";
    }

    // 3. if-elseif-else yapısı
    if ($sayi == 5) {
        echo "Sayı 5'tir.<br>";
    } elseif ($sayi == 10) {
        echo "Sayı 10'dur.<br>";
    } elseif ($sayi == 15) {
        echo "Sayı 15'tir.<br>";
    } else {
        echo "Sayı 5, 10 veya 15 değildir.<br>";
    }

    // 4. Kısa if (ternary) kullanımı
    echo $sayi == 25 ? "Sayı 25'tir.<br>" : "Sayı 25 değil.<br>";

    // 5. isset() ile koşul kontrolü
    if (isset($ad)) {
        echo "Ad değişkeni tanımlanmış: $ad<br>";
    } else {
        echo "Ad değişkeni tanımlanmamış.<br>";
    }

    // 6. empty() ile koşul kontrolü
    if (empty($deger)) {
        echo "Değer boş veya tanımlanmış değil.<br>";
    } else {
        echo "Değer: $deger<br>";
    }

    // 7. Negatif koşul (! operatörü)
    if (!($yas < 18)) {
        echo "18 yaşından büyük veya eşit.<br>";
    }
    ?>

</body>
</html>
