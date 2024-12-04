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
    for ($i=1; $i <=100 ; $i++) { 
		echo $i." ";
		if ($i==50) {
			echo "<br>";
			echo $i." sayıya ulaştık";
			echo "<br>";		}
		}
    */


	//For döngüsü ile 100'e kadar sayı yazdırıp bunların tek yada çift olduklarını bulalım. Tek ve Çift sayı adedinide görelim.

		echo "<br>";
		echo "<hr>";
		$tek=0;
		$cift=0;

		for ($i=1; $i <=100 ; $i++) { 

			echo "$i. Sayı :".$i; 
			if ($i%2==0) {
				echo " Bu sayı çift";
				$tek++;
			} 
            else {
				echo " Bu sayı tek";
				$cift++;
			}

			echo "<br>";
			echo "<hr>";
		}

		echo "<hr>";
		echo "Çift sayı $cift adet var."; echo "<br>";
		echo "Tek sayı $tek adet var."; echo "<br>";
	?>
</body>
</html>