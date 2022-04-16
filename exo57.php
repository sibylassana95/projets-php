<!DOCTYPE html>
<html>
<head>
	<title>5.7</title>
</head>

<body>
	<form  action=""method="POST">
		<label>saisir le nombre 1 :</label><input type="number" name="valeur1"><br>
		<label>saisir le nombre 2 :</label><input type="number" name="valeur2"><br>
		<label>saisir le nombre 3 :</label><input type="number" name="valeur3"><br>
		<label>saisir le nombre 4 :</label><input type="number" name="valeur4"><br>
		<label>saisir le nombre 5 :</label><input type="number" name="valeur5"><br>
		<label>saisir le nombre 6 :</label><input type="number" name="valeur6"><br>
		<label>saisir le nombre 7 :</label><input type="number" name="valeur7"><br>
		<label>saisir le nombre 8 :</label><input type="number" name="valeur8"><br>
		<label>saisir le nombre 9 :</label><input type="number" name="valeur9"><br>
		<label>saisir le nombre 10:</label><input type="number" name="valeur10"><br>
		<label>saisir le nombre 11:</label><input type="number" name="valeur11"><br>
		<label>saisir le nombre 12:</label><input type="number" name="valeur12"><br>
		<label>saisir le nombre 13:</label><input type="number" name="valeur13"><br>
		<label>saisir le nombre 14:</label><input type="number" name="valeur14"><br>
		<label>saisir le nombre 15:</label><input type="number" name="valeur15"><br>
		<label>saisir le nombre 16:</label><input type="number" name="valeur16"><br>
		<label>saisir le nombre 17:</label><input type="number" name="valeur17"><br>
		<label>saisir le nombre 18:</label><input type="number" name="valeur18"><br>
		<label>saisir le nombre 19:</label><input type="number" name="valeur19"><br>
		<label>saisir le nombre 20:</label><input type="number" name="valeur20"><br>

		<input type="submit" value="calculer">
	</form>
	<?php
	   for ($i=1; $i <=20 ; $i++) { 
	   	$tab[]=$_POST['valeur'.$i];
	   }
	   //var dump ($tab);
	   $tempo=$tab[0];
	   for ($j=1; $j < 20 ; $j++) { 
	   	if ($tempo < $tab[$j]) {
	   		$tempo=$tab[$j];
	   		$position=$j;
	   	}
	   }
	   echo("Le plus grand nombre est :".$tempo."\n");
	   echo("C'etait le nombre en position :".$position);
	?>
</body>
</html>