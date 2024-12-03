<?php 
// GET parametrelerini kontrol et
if (isset($_GET['ad']) && isset($_GET['soyad'])) {
    echo "Ad: " . htmlspecialchars($_GET['ad']) . "<br>";
    echo "Soyad: " . htmlspecialchars($_GET['soyad']) . "<br>";
} else {
    echo "Ad ve soyad parametreleri gönderilmedi.<br>";
}

if (isset($_GET['kullanici_id'])) {
    $kullanici_id = $_GET['kullanici_id'];
    echo "Kullanıcı ID: " . htmlspecialchars($kullanici_id) . "<br>";

    // Kullanıcıyı silme işlemi (örnek: veritabanından silme)
    // Burada veritabanı işlemleri yapabilirsiniz
    echo "Kullanıcı silindi: " . $kullanici_id;
} else {
    echo "Kullanıcı ID parametresi eksik.<br>";
}
?>
