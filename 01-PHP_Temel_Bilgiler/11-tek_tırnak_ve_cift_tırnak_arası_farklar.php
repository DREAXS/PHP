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
    -Çift tırnak içerisinde değişken içerikleri okunabilir, 
    -tek tırnak içerisinde değişken içerikleri okunmaz
    */
    echo "<br>";
    $ad="Alper";
    $soyad="Bilgin";

    echo "Benim Adım $ad";
    echo "<br>";
    echo 'Benim Adım $ad';
    ?>
</body>
</html>