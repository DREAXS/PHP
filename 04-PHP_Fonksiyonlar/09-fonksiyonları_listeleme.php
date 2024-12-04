<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
    //Php tüm fonksiyonları listeleme

    $yaz=get_defined_functions();
    echo "<pre>";
    print_r($yaz);
    echo "</pre>";
?>
</body>
</html>