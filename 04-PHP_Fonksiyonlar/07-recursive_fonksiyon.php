<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

    function faktoriyel($a) {
        $sabit = 1; // Her fonksiyon çağrısında sabiti sıfırlıyoruz
        if ($a > 1) {
            for ($i = $a; $i > 1; $i--) {
                $sabit *= $i; 
            }
        }
        return $sabit;
    }

    echo faktoriyel(5)."<br>"; 
    echo faktoriyel(6)."<br>"; 
    echo faktoriyel(7)."<br>";
?>
</body>
</html>