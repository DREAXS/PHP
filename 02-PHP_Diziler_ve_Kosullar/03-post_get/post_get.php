<!DOCTYPE html>
<html>
<head>
    <title>Form Gönderimi</title>
    <meta charset="utf-8">
</head>
<body>

<?php 
// GET parametreleri ile veri almayı kontrol et
if (isset($_GET['ad']) && isset($_GET['soyad'])) {
    echo "Ad: " . htmlspecialchars($_GET['ad']) . "<br>";
    echo "Soyad: " . htmlspecialchars($_GET['soyad']) . "<br>";
} else {
    echo "Ad ve soyad parametreleri gönderilmedi.<br>";
}

$kullanici_id = 151; // Kullanıcı ID
?>

<form action="islem.php" method="GET">
    Ad: <input type="text" name="ad" placeholder="Adınızı Girin">
    SoyAd: <input type="text" name="soyad" placeholder="SoyAdınızı Girin">
    <input type="submit" value="Formu Gönder">
</form>

<!-- Kullanıcıyı Silme Butonu -->
<a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı Sil</button></a>

</body>
</html>
