<!DOCTYPE html>
<html>
<head>
	<title>exo3.3</title>
</head>
<body>
<form method="POST">
	Entrez 3 noms <br>
	<input type="text" name="text1"> <br>
	<input type="text" name="text2"><br>
	<input type="text" name="text3"><br>
	<input type="submit" value="ok">


</form>

<?php

$A= $_POST['text1'];
$B = $_POST['text2'];
$C = $_POST['text3'];
if ($A< $B and $B < $C) {
	echo "Ces noms sont classes alphabetiquement";
}
else echo "Ces noms ne sont pas classes alphabetiquement";



  ?>
</body>
</html>