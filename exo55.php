<!DOCTYPE html>
<html>
<head>
	<title>exo5.5</title>
</head>
<body>
<form method="POST">
	ENTREZ UN NOMBRE <input type="number" name="n">
	<input type="submit" value =" valider">

</form>
 <?php 
$A = $_POST['n'];
$somme=0;
for ($i=0; $i <=$A ; $i++) { 
	$somme=$somme+$i;
 }
echo "$somme";





  ?>
</form>
</body>
</html>