<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tek ve Çift Sayı Kontrolü</title>
</head>
<body>

    <?php 
    // Sayının tek mi çift mi olduğunu kontrol eden PHP kodu
    if (isset($_POST['notislemi'])) {
        // Formdan gelen veriyi alıyoruz
        $not = $_POST['not'];

        // Sayı geçerli bir sayıdır mı kontrol edelim
        if (is_numeric($not)) {
            echo "Sayı: " . $not . " - ";

            // Sayının tek mi çift mi olduğunu kontrol ediyoruz
            if ($not % 2 == 0) {
                echo "Bu sayı çifttir.";
            } else {
                echo "Bu sayı tektir.";
            }
        } else {
            echo "Lütfen geçerli bir sayı girin.";
        }
    }
    ?>

    <hr>

    <!-- Sayı girmek için form -->
    <form action="" method="POST">
        Sayı Girin: <input type="text" name="not" placeholder="Sayı Girin" required>    
        <button type="submit" name="notislemi">Sonuçlandır</button>
    </form>

</body>
</html>
