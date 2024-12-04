<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
ob_start();
session_start();

echo $_SESSION['adsoyad'];

echo "<br>";

echo $_SESSION['il'];

?>
</body>
</html>