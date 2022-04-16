<!DOCTYPE html>
<html>
<head>
	<title>exo4.6</title>
</head>
<body>
<form method="POST">
	Entrez les scores des quatre pretendants <br>
    <input type="number" name="candidat1"> <br>
    <input type="number" name="candidat2"> <br>
    <input type="number" name="candidat3"> <br>
    <input type="number" name="candidat4"> <br>
    <input type="submit" value="ok">
  
</form>

<?php

   $A = $_POST['candidat1'];
   $B = $_POST['candidat2'];
   $C = $_POST['candidat3'];
   $D = $_POST['candidat4'];

   echo "$A -- $B-- $C --$D";


   $C1 = $A > 50;
   $C2 = $B > 50 or $C > 50 or $D > 50;
   $C3 = $A >= $B and $A >= $C and $A >= $D;
   $C4 = $A >= 12.5;

   if ($C1) {
   	echo "Elu au premier tour";
   }
          elseif ($C2 or ($C4)) {
          echo "Battu, elime, sorti"; 
          }

          elseif ($C3) {
          	echo "Ballotage favorable";
          }
          else echo "Ballotage défavorable";
  ?>
</body>
</html>