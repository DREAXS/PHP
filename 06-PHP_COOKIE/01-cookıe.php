<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    date_default_timezone_set('Europe/Istanbul');

    //COOKIE nedir nasıl oluşturulur?
    /*$adsoyad="ALPER BİLGİN";
    setcookie("adsoyad",$adsoyad);
    echo $_COOKIE["adsoyad"];

    */

    $adsoyad="ALPER BİLGİN";
    setcookie("adsoyad",$adsoyad,strtotime("+1 week"));
    echo $_COOKIE["adsoyad"];

    /*
    COOKIE süre arttırma
    time()+3600 1 saat
    strtotime("+30 seconds") 30 saniye
    strtotime("+1 hours") 1 Saat
    strtotime("+1 day") 1 gün
    strtotime("+1 week") 1 hafta


    */
?>
</body>
</html>