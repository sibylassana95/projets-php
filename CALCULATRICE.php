<!DOCTYPE html>
<html>
<head>
	<title>EXERCICES PHP</title>
</head>
<body bgcolor="grey">
  <h1>entrez un nombre</h1>
  <form method="POST">
	             N1<input type="number" name="n1"><br>
	             N2<input type="number" name="n2"><br>
	             
	               <select name="choix">
		              <option>addition</option>
		              <option>soustraction</option>
		              <option>multiplication</option>
		</select><br>
	
	
                     <input type="submit" value="Resultat" >
</form>
<?php 
                     $A = $_POST['n1'];
                     $B = $_POST['n2'];
                     $C = $_POST['choix'];
                     if ($C == addition) 
                     {
                     	$R = $A + $B; 
                     	echo $R;
                     }
               elseif ($C == soustraction) 
               {
               	$R = $A - $B;
               	echo $R;
               }
                     elseif ($C == multiplication)
                      {
               	$R = $A * $B;
               	echo $R;
               }

           
?>

</body>
</html>
