<title>exo 5.4</title>
</head>
<body>

	<form method="POST">
	           Entrez un nombre   <input type="number" name="n"><br>
	           <input type="submit" value="valider" >


</form>
<?php 
   $A = $_POST['n'];
   $B = $A * 1  ;
   $C = $A *2;
   $D = $A *3  ;
   $E = $A*4;
   $F = $A *5  ;
   $I = $A*6;
   $G = $A *7  ;
   $K = $A*8;
   $H = $A *9  ;
   $L = $A*10;






   echo (" $A * 1 = $B "); 

               echo " <br> ";
  echo (" $A * 2 = $C "); 
                echo "    <br>  ";
   echo (" $A * 3 = $D ");  
               echo "  <br>  ";
   echo (" $A * 4 = $E "); 
                echo " <br>   ";
   echo (" $A * 5 = $F "); 
                 echo "  <br>  ";
   echo (" $A * 6 = $I "); 
                   echo "  <br>  ";
   echo (" $A * 7 = $G "); 
               echo " <br>  ";
   echo (" $A * 8 = $K "); 
              echo " <br>  ";
  echo (" $A * 9 = $H "); 
              echo " <br>   ";
   echo (" $A * 10 = $L "); 



?>
</body>
</html>