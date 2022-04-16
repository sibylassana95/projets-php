<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<p>Entrez un nombre </p>
		<input type="number"  name="nbr1">
		<input type="submit">


	</form>
	<?php 
	error_reporting(E_ALL ^ E_NOTICE);
$a=$_POST['nbr1'];
$somme=$a+$a;
echo"la somme de ce nombre est $somme";

	 ?>
</body>
</html>