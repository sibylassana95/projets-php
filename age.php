<?php 

$A = $_POST['age'];
if ($A >=12) {
	echo "cadet";
}

elseif ($A >=10) {
	echo "minime";
	
}
elseif ($A >=8) {
	echo "pupille";
	
}
elseif ($A >=6) {
	echo "poussin";
	
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>exo 3.6</title>
</head>
<body>
<form method="POST">
	ENTREZ L'AGE DUN ENFANT <input type="number" name="age">
	<input type="submit" value="valider">

</form>



</body>
</html>