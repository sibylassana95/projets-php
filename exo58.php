<!DOCTYPE html>
<html>
<head>
    <title>exo5.8</title>
</head>
<body>
 <form method="POST">  
     
              Nom<input type="texte" name="nom"> <br>
      
             Prenom<input type="texte" name="prenom"> <br>
      
             Age<input type="number" name="age"> <br>

             <input type="submit" value="Ok"> <br>


 </form>
<table border="1">
 <?php  

                     $A = $_POST['nom'];
                     $B = $_POST['prenom'];
                     $C = $_POST['age'];
                    

                     echo( "<tr ><td> Nom $A </tr></td>  ");
                     echo(   "   <br> "); 
                     echo( "<tr ><td> Prenom    $B </tr></td>");
                     echo( "<tr ><td> Age        $C </tr></td>");


  ?>
  </table>
</body>
</html>