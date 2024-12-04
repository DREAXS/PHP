<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>

		<?php 
		for ($i=1; $i <= 81 ; $i++) {?>

            <!-- <option>  <?php echo $i ?>   </option> -->
			<option value=" <?php echo $i ?> ">  <?php echo $i ?> </option>

		<?php }
		?>

	</select>
</body>
</html>