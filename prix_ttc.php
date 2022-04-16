<!DOCTYPE html>
<html>
<head>
	<title>exo 2.3</title>
</head>
<body>
<form method="POST">
	Entrez le prix hors taxes <input type="number" name="horstaxes"> <br>
	Entrez le nombre darticles<input type="number" name="article"> <br>
	Entrez le taux de TVA <input type="number" name="tva"><br>
	<input type="submit" value="valider">

</form>

<?php 

$A = $_POST['horstaxes'];
$B = $_POST['article'];
$C= $_POST['tva'];
$D = $A * $B * (1 + $C);

echo " Le prix toutes taxes est $D";
	


 ?>

</body>
</html>
