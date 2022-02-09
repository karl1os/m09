<?php

/**
 * 
 * @author Carlos Hernandez Navarro
 * 
 */

    $matriuA=[

        [2,0,1],
        [3,0,0],
        [5,1,1]

    ];

    $matriuB=[

        [1,0,1],
        [1,2,1],
        [1,1,0]

    ];

    /**
     * Imprime la matriz recivida de forma legible.
     * @param mixed $matriu0
     * 
     * @return void
     */
    function imprimeixMatrius ($matriu0){

        global $numCol, $numFil;
        $largoMasLargo = calculaNumeroMesLlarg($matriu0);
        $caracters=calculaCaracters($largoMasLargo);
        $numCol=0;
        $numFil=0;
# Llamamos al metodo que imprime la cabecera.
        print printCapsalera($caracters);

        foreach ($matriu0 as $fila) {

            $numFil++;

            foreach ($matriu0 as $columna) {

                $numCol++;     
                
            }}
        
        $numCol=($numCol/$numFil);

        foreach ($matriu0 as $fila) {
            
            foreach ($fila as $columna => $colVal) {
#Busca el tamaño del valor en la posicion determinada para igualar todos los valores (en tamaño) con "0" a la izquierda
                $largoActual = strlen ($colVal);
/**
 * Si se encuentra en la primera columna del array tiene dos opciones, si el numero actual es mas pequeño que el mas largo que existe, 
 * rellena con 0 y el formato adecuado "|numero,", en caso de que sea del mismo tamaño realiza la misma operacion sin rellenar con nada.
 */
                if ($columna==0) {

                    if ($largoActual < $largoMasLargo){

                        echo "|".str_pad (
                            $colVal, $largoMasLargo, "0", STR_PAD_LEFT
                        ).",";
    
                    }else {
                        print "|".$colVal.",";
                    }
# Si se encuentra en la ultima columna repite el proceso anterior pero la barra vertical la pondra al final junto con un salto de linea.                   
                }elseif($columna==$numCol-1){
                    if ($largoActual < $largoMasLargo){

                        echo str_pad (
                            $colVal, $largoMasLargo, "0", STR_PAD_LEFT
                        )."|\n";
    
                    }else {
                        print $colVal."|\n";
                    }
# En cualquier otro caso (osea cualquier columna que no sea al principio o al final) repite lo mismo que lo anterior pero solo pone una coma.                    
                }else {
                    if ($largoActual < $largoMasLargo){

                        echo str_pad (
                            $colVal, $largoMasLargo, "0", STR_PAD_LEFT
                        ).",";
    
                    }else {
                        print $colVal.",";
                    }
                    
                }

            }

        }
# Volvemos a llamar al metodo de cabecera ya que es igual que el pie.
        print printCapsalera($caracters);

    }

     /**
      * Recorre los valores de la matriz para encontrar numero de caracteres de cada valor, guardando el mas largo.
      * @param mixed $matriu0
      * 
      * @return [integer]
      */
     function calculaNumeroMesLlarg ($matriu0) {

        $valActual=0;

        foreach ($matriu0 as $fila) {
            
            foreach ($fila as $columna => $colVal) {

                $largo = strlen($colVal);
                
                if ($largo > $valActual) {

                    $valActual = $largo;

                }

            }

        }

        return $valActual;

    }

    /**
     * Calcula el numero de caracteres que tendra cada fila sumando los caracteres de cada columna mas sus espacios, mas el caracter final y el inicial.
     * @param mixed $numeroMesLlarg
     * 
     * @return [integer]
     */
    function calculaCaracters ($numeroMesLlarg) {

        global $numCol;
        
        return ($numCol*$numeroMesLlarg)+$numCol+1;

    }

    /**
     * Imprime una cabecera compuesta por "--"(variable $guions) concatenado con tantos espacios vacios menos 2 (primer caracter y ultimo) 
     * del numero de caracteres (variable extraida de la funcion calculaCaracters) y "--" mas un salto de linea
     * @param mixed $caracters
     * 
     * @return [void]
     */
    function printCapsalera ($caracters) {

        $guions = "--";
        print str_pad ($guions, $caracters-2, " ", STR_PAD_RIGHT);
        print "--\n";

    }

    /**
     * Suma los valores de las dos matrices, con dos for que recorren dicha matriz para luego realizar el proceso.
     * @param mixed $matriu1
     * @param mixed $matriu2
     * 
     * @return [array]
     */
    function sumaMatrius ($matriu1, $matriu2) {

        global $numCol, $numFil;
        print "Aquesta es la suma de matrius: \n";

        for ($f=0; $f < $numFil ; $f++) { 
            
            for ($c=0; $c < $numCol ; $c++) { 
                
                $matriu0[$f][$c]=$matriu1[$f][$c]+$matriu2[$f][$c];

            }

        }
        
        return $matriu0;

    }

     /**
      * Multiplica y suma los resultados de dos arrays en un orden especifico
      * @param mixed $matriu1
      * @param mixed $matriu2
      * 
      * @return [array]
      */
     function multiplicaMatrius ($matriu1, $matriu2) {

        global $numCol, $numFil;
        $numFil2=0;
        $matriu0=$matriu2;
        print "Aquesta es la multiplicacio de matrius: \n";
/**
 * Creamos un bucle triple para poder realizar las operaciones, en el segundo se aprovecha para reiniciar los valores de la matriz 0.
 * en el tercer bucle es donde se realiza la operacion con la siguiente logica de ejemplo:
 * $matriz0[0][0] = ($matriz1[0][0] X $matriz1[0][0]) + ($matriz1[0][1] X $matriz1[1][0]) + ($matriz1[0][2] X $matriz1[2][0])
 * asi sucesivamente hasta recorrer las dos arrays llenando el array de resultados.
 */
        for ($i=0; $i < $numFil; $i++) { 
            for ($z=0; $z < $numCol ; $z++) {
                $matriu0[$i][$z]=0; 
                for ($x=0; $x < $numCol; $x++) { 
                    
                    $matriu0[$i][$z]+=$matriu1[$i][$x]*$matriu2[$x][$z];
                } 
                $x=0;
            }
            $z=0;
        }
        return $matriu0;

    }

    print "Aquesta es la matriu A: \n";
    imprimeixMatrius($matriuA);
    print "Aquesta es la matriu B: \n";
    imprimeixMatrius($matriuB);
    imprimeixMatrius(sumaMatrius($matriuA, $matriuB));
    imprimeixMatrius(multiplicaMatrius($matriuA, $matriuB));

?>