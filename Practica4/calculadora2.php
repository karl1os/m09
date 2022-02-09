<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Practica 4 - Calculadora I</title>
</head>

<body>
   <h1>La meva calculadora</h1>

   <form action="calculadora2.php" method="POST">
      Número 1:
      <input type="text" name="num1"><br><br>
      Número 1:
      <input type="text" name="num2"><br><br>
      <select name="opera" class="field-select">
         <option value="+">suma</option>
         <option value="-">resta</option>
         <option value="*">multiplicacio</option>
         <option value="/">divisió</option>
      </select><br><br>
      <input type="submit" value="Calcula"><br><br>
   </form>
   <?php
      $entrada1 = $_REQUEST['num1'];
      $entrada2 = $_REQUEST['num2'];
      $operant = $_REQUEST['opera'];
      if( empty($entrada1&&$entrada2) ){print("Introdueix dos números per a operar.\n");}
      else{
         if ($operant == "+"){
            $resul = $entrada1 + $entrada2;
            echo ("$entrada1 + $entrada2 = $resul");
         }elseif ($operant == "-"){
            $resul = $entrada1 - $entrada2;
            echo ("$entrada1 - $entrada2 = $resul");
         }elseif ($operant == "*"){
            $resul = $entrada1 * $entrada2;
            echo ("$entrada1 X $entrada2 = $resul");
         }elseif ($operant == "/"){
            $resul = $entrada1 / $entrada2;
            echo ("$entrada1 / $entrada2 = $resul");
         }else{
            echo "Tipus d'operacio no selecionada.";
         };
         

      }
   ?>
</body>

</html>


