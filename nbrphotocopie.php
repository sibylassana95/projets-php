<!DOCTYPE html>
<html>
<head>
	<title>exo3.2</title>
</head>
<body>
<form method="POST">
	Entrez  le nombre de photocopies <br>
	<input type="number" name="nbr">
	<input type="submit" value="ok">

</form>

<?php 

$A = $_POST['nbr'];




if ($A <= 10 ) {
$B = $A * 0.1;
	
}
elseif ($A<= 30 ) {
	$B=10 * 0.1 +( $A - 10) * 0.09;
}

else $B =10* 0.1 + 20 * 0.09 +( $A - 30) * 0.08;

echo "Le prix total est $B";
?>

</body>
</html>