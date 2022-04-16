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

$C = $B+1;


if ($B=60 ) {
	$B=0;
	
}
elseif ($A=24) {
	$E=0;
}

echo "Dans une minute il sera $A h $C minutes";
?>

</body>
</html>