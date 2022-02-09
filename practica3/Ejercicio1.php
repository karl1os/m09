<?php
 
/**
 * 
 * @author Carlos Hernandez Navarro
 * 
 */

   $resultvocal='';
   $resultcons='';
   $cadena = readline('Escriu una paraula: ');
   print(separarVocalsDeConsonants($cadena));
 
   /**Esta funcion separa las letras y las envia a la funcion esVocal para despues concatenar el resultado (vocales + consonantes) e imprimir este resultado.
    * @param mixed $cadena
    * 
    * @return [string]
    */
   function separarVocalsDeConsonants( $cadena ) {
 
       global $resultvocal,$resultcons;
       $split = str_split($cadena, 1);
       foreach ($split as $letters){
           esVocal($letters);

       }

       $result = $resultvocal.$resultcons;
       return $result;
       
   }
 
   /**
    * comprueba cada letra que le llega desde la funcion anterior, si es una vocal lo concatena en su variable con los valores que ya existen en ella, 
    *en caso contrario es una consonante, y realiza el mismo proceso en la variable de las consonantes.
    * @param mixed $letters
    * 
    * @return [string]
    */
   function esVocal( $letters ){
 
       global $resultvocal,$resultcons;
       if($letters=='a'||$letters=='e'||$letters=='i'||$letters=='o'||$letters=='u')

       {

           $resultvocal = $resultvocal.$letters;
           return $resultvocal;

       }

       else{

           $resultcons = $resultcons.$letters;
           return $resultcons;

       }
       
   }
 
?>
