<?php
// Veritabanı bağlantı bilgileri
$host = 'localhost';      // Sunucu adresi (XAMPP için genellikle localhost)
$dbname = 'egitim';       // Veritabanı adı
$username = 'root';       // XAMPP varsayılan kullanıcı adı 'root'
$password = '';           // XAMPP varsayılan şifre boş ("")

// Veritabanı bağlantısını kurma
try {
    // PDO ile bağlantı oluşturuluyor
    $db = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    
    // PDO hata modunu ayarlama (exceptions)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Veritabanına başarılı bir şekilde bağlandınız!";
}
catch (PDOException $e) {
    // Hata durumunda yakalanacak exception mesajı
    //echo "Bağlantı hatası: " . $e->getMessage();
}
?>
