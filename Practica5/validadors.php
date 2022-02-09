<?php



function validarNoBuit($valor){
    if ($valor != "") {
        return false;
    }else {
        return true;
    }
}

function validarLlargada($valor){
    if (strlen($valor) > 5) {
        return false;
    }else {
        return true;
    }
}

function validarEmail($valor){
    if (filter_var($valor, FILTER_VALIDATE_EMAIL)) {
        return false;
    }else {
        return true;
    }
}

function validarCiutat($valor){
    if (strlen($valor) > 5) {
        return false;
    }else {
        return true;
    }
}

function validarNoNum($valor){
    $result=false;
    for ($i=0; $i < strlen($valor); $i++) {
        if (ctype_digit($valor[$i])) {
            $result=true;
        }
    }
    return $result;    
}

function validarNoLetra($valor){
    $result=false;
    for ($i=0; $i < strlen($valor); $i++) {
        if (!ctype_digit($valor[$i])) {
            $result=true;
        }
    }
    return $result;    
}

function validarProvincia($valor){
    $provincias = array("Álava", "Albacete", "Alicante", "Almería", "Asturias", "Ávila", "Badajoz", "Barcelona", "Burgos", "Cáceres", "Cádiz", "Cantabria", "Castellón", "Ciudad Real", "Córdoba", "Cuenca", "Gerona", "Granada", "Guadalajara", "Guipúzcoa", "Huelva", "Huesca", "Islas Baleares", "Jaén", "La Coruña", "La Rioja", "Las Palmas", "León", "Lérida", "Lugo", "Madrid", "Málaga", "Murcia", "Navarra", "Orense", "Palencia", "Pontevedra", "Salamanca", "Santa Cruz de Tenerife", "Segovia", "Sevilla", "Soria", "Tarragona", "Teruel", "Toledo", "Valencia", "Valladolid", "Vizcaya", "Zamora", "Zaragoza");
    if (in_array($valor, $provincias)) {
        return false;
    }else {
        return true;
    }
}

?>