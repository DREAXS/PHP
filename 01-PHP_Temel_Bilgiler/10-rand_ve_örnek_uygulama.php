<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo $sayi=rand(0,10); echo "<br>";
    if ($sayi>=5) {
        echo "kazandın";
    } 
    else {
        echo "Kaybettin dostum";
    }
    
    ?>
</body>
</html>