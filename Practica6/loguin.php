<?php

    # comprovem si existeix l'usuari i si es aixi comprovem que la contrasenya d'aquest usuari coincideixi amb la introduida.
    function testUsuariContrasenya($lUsuari, $lcontrasenya){

        $uspas = array(

            "rafa" => "cuestas",
            "admin" => "admin"

        );
        
        if (array_key_exists($lUsuari, $uspas)) {
            
            $paswd=$uspas[$lUsuari];
            if ($paswd == $lcontrasenya) {
                
                return false;

            }else{

                return true;
    
            }

        }else{

            return true;

        }

    }

    # tanca la sesio actual i et retorna al menu d'autentificacio
    function logout(){
        @session_start();
        session_destroy();
        header("Location: autenti.html");
    }

?>
