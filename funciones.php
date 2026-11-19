<?php
    // Funciones para identificadores
    function obtenerIniciales($nom){
        $palas=explode(" ",trim($nom));
        $nombre=$palas[1];
        $can=strlen($nombre);

        $iniciales="";
        for($i=1;$i<3;$i++){
            if($i<=($can-1)){
                $iniciales=$iniciales.$nombre[$i];
            }else{
                break;
            }
        }
    }
?>