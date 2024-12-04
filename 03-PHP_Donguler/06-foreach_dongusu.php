<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    	$dizi=array("elma","armut","üzüm","kavun","karpuz","emrah","udemy","php","bootstrap4");

	$say=count($dizi);
	for ($i=0; $i <=$say ; $i++) { 
		echo $dizi[$i]; echo " ";
	}

echo "<hr>";
	//Foreach döngüsü
	foreach ($dizi as $meyve) {
		echo $meyve; echo " ";
	}
    
    ?>
</body>
</html>