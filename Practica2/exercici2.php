<?php

    $matriz[0] = "cougar";
    $matriz[1] = "ford";
    $matriz[2] = null;
    $matriz[3] = "2.500";
    $matriz[4] = "V6";
    $matriz[5] = 182;
    print ("Tabulant informació \n \n");
    print ("Index \t Valor \n");
    foreach($matriz as $num=>$string){
        echo $num."\t".$string."\n";
    }

?>