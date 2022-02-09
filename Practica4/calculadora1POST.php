<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Practica 4 - Calculadora I</title>
</head>

<body>
   <h1>La meva calculadora</h1>

   <form action="calculadora1.php" method="POST">
       Número 1:
       <input type="text" name="num1"><br><br>
       Número 1:
       <input type="text" name="num2"><br><br>
       <input type="submit" value="Calcula"><br><br>
   </form>
   <?php
      $entrada1 = $_REQUEST['num1'];
      $entrada2 = $_REQUEST['num2'];
      if( empty($entrada1&&$entrada2) ){print("Introdueix dos números per a operar.\n");}
      else{
         $sum = $entrada1 + $entrada2;
         $res = $entrada1 - $entrada2;
         $mul = $entrada1 * $entrada2;
         $div = $entrada1 / $entrada2;
         echo nl2br("$entrada1 + $entrada2 = $sum \n\n");
         echo nl2br("$entrada1 - $entrada2 = $res \n\n");
         echo nl2br("$entrada1 X $entrada2 = $mul \n\n");
         print("$entrada1 / $entrada2 = $div");
      }
   ?>
</body>

</html>


