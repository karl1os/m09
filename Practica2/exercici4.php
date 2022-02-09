<?php

    $dia_ingles = date( 'D');
    if ($dia_ingles == "Mon"){
        echo "avui es Dilluns";
    } elseif ($dia_ingles == "Tue"){
        echo "avui es Dimarts \n";
    } elseif ($dia_ingles == "Wed"){
        echo "avui es Dimecres \n";
    } elseif ($dia_ingles == "Thu"){
        echo "avui es Dijous \n";
    } elseif ($dia_ingles == "Fri"){
        echo "avui es Divendres \n";
    } elseif ($dia_ingles == "Sat"){
        echo "avui es Disabte \n";
    } elseif ($dia_ingles == "Sun"){
        echo "avui es Diumenge \n";
    }

?>