<!DOCTYPE html>
<html>
<head>
	<title>exo 5.2</title>
</head>
<body>

	<form method="POST">
	           Entrez un nombre entre 10 et 20  <input type="number" name="n"><br>
	           <input type="submit" value="valider" >


	</form>
<?php 
   $A = $_POST['n'];
   


  if ($A < 10) 
  {
  	echo "Plus grand !";

  }
  elseif ($A > 20) 
  {
  	echo "Plus petit !";
  }

 
 
 ?>
</body>
</html>