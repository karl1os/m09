<?php

    $numread = readline('Introdueix un número entre el 1 i el 10: ');
    if( empty($numread) ){print("No has introduit cap numero\n");}
    else{
        if($numread > 10 || $numread < 0){print("el numero introduit no es correcte\n");}
        else{
            $nummulti = 0;
            print(" \n");
            print("Taules de multiplicar del 2 \n");
            print("=====================");
            while($nummulti<11){
                $result=($numread * $nummulti);
                print("$numread * $nummulti = $result \n");
                $nummulti++;
            }
        }
    }

?>