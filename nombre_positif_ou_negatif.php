<!DOCTYPE html>
<html>
<head>
	<title>exo3.1</title>
</head>
<body>

<form method="POST">
	ENTREZ un nombre <input type="number" name="nbr">
	<input type="submit" value="valider">

</form>

<?php
$A = $_POST['nbr'];
if ($A >0) {
	echo "Ce nombre est positif";
}

else echo "Ce nombre est negatif";



  ?>
</body>
</html>