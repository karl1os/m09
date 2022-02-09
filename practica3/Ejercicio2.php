<?php

/**
 * 
 * @author Carlos Hernandez Navarro
 * 
 */

    $radio = readline('Escriu el radi del con: ');
    $altura = readline('Escriu l\'altura del con: ');

    /**
     * Esta funcion simplemente aplica una formula geometrica.
     * @param mixed $radio
     * @param mixed $altura
     * 
     * @return [void]
     */
    function volum($radio, $altura){

        return (pow($radio, 2) * M_PI * $altura) / 3;

    }
   
    echo "El volum del con es: ".volum($radio, $altura)."\n";

?>
