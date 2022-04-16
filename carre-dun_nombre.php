<!DOCTYPE html>
<html>
<head>
	<title>exo 2.2</title>
</head>
<body>
<form method="POST">
	ENTREZ un nombre <input type="number" name="age">
	<input type="submit" value="valider">

</form>

<?php 

$A = $_POST['age'];
$B= $A*$A;
echo " le carre de ce nombre est $B";
	


 ?>

</body>
</html>