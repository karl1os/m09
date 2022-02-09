<?php

    $num = rand(1, 10);
    $intentos = 5;
    $numread = 0;
    while (($numread != $num) && ($intentos>1)){
        $numread = readline('Introdueix un número entre el 1 i el 10: ');
        if( empty($numread) ){print("No has introduit cap numero\n");}
        else{
            if($numread > 10 || $numread < 0){print("el numero introduit no es correcte\n");}
            else{
                
                if ($numread == $num){
                    echo "Has acertado \n";
                }else{
                    echo "Prueba otra vez \n";
                    $intentos--;
                    echo "te quedan $intentos intentos \n";
                }
            }
        }
    }
    echo "has perdido \n";

?>