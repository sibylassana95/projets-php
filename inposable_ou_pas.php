<!DOCTYPE html>
<html>
<head>
	<title>exo 4.5</title>
</head>
<body>
	<form method="POST">
		sexe <select name="choix">
			<option>homme</option>
			<option>femme</option>
		   </select> <br>
		
      Entrez l age<input type="number" name="age"> <br>
      <input type="submit" value="valider">


	</form>
  <?php

$A = $_POST['age'];
$B = $_POST['choix'];
if ($B == homme and $A> 20) 
                     {
                     	 
                     	echo "impossable";
                     }


elseif ($B== femme and ($A > 18 and $A < 35)) {
	
echo "impossable";
}
else  echo "non impossable";

    ?>

</body>
</html>