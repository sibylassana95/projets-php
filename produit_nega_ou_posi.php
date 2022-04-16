<!DOCTYPE html>
<html>
<head>
	<title>exo3.2</title>
</head>
<body>
<form method="POST">
	Entrez deux nombres <br>
	<input type="number" name="nbr1">
	<input type="number" name="nbr2">
	<input type="submit" value="ok">

</form>

<?php 

$A = $_POST['nbr1'];
$B = $_POST['nbr2'];
if ($A*$B>0 ) {
	echo "leur produit est positif";
}


else echo "leur produit est negatif";

 ?>
</body>
</html>