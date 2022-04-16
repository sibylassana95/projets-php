<!DOCTYPE html>
<html>
<head>
	<title>exo 5.6</title>
</head>
<body>
<form method="POST" >
	ENTREZ UN NOMBRE <input type="number" name="n">
	<input type="submit" value =" valider">

</form>

<?php                               



$A = $_POST['n'];

$factorielle=1;
for ($i=1; $i <$A ; $i++) { 
	$factorielle=$factorielle*$i+$factorielle;
	echo $i.'x'; 

}
echo "le factorielle de ce nombre est        $A";


?>



</body>
</html>