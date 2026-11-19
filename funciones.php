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
        return strtoupper($iniciales);
    }

    function obtenerAnio($anio){
        $dos=substr($anio, 2, 3);
        return $dos;
    }

    function obtenerMesDia($medi){
        $mes=substr($medi, 5, 6);
        $dia=substr($medi, 8, 9);

        $funcion=$mes.$dia;
        return $funcion;
    }

    
?>