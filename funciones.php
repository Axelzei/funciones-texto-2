<?php
    // Funciones para identificadores
    function obtenerIniciales($nom){
        $palas=explode(" ",trim($nom));
        $nombre=$palas[0];
        $can=strlen($nombre);

        $iniciales="";
        for($i=0;$i<3;$i++){
            if($i<=($can-1)){
                $iniciales=$iniciales.$nombre[$i];
            }else{
                break;
            }
        }
        return strtoupper($iniciales);
    }

    function obtenerAnio($anio){

        $dos="";
        for($i=2;$i<4;$i++){
            $dos=$dos.$anio[$i];
        }
        return $dos;
    }

    function obtenerMesDia($medi){
        $mes="";
        $dia="";
        for($i=5;$i<7;$i++){
            $mes=$mes.$medi[$i];
        }
        for($i=8;$i<10;$i++){
            $dia=$dia.$medi[$i];
        }
        

        $funcion=$mes.$dia;
        return $funcion;
    }

    function generarClave($ini, $an, $md){
        $clave=$ini.$an.$md;
        return $clave;
    }

    //Funciones para generar usuario
    function limpiarNombre($nom){
        $noms=explode(" ",trim($nom));
        $can=count($noms);

        $limpio="";
        for($i=0;$i<$can;$i++){
            $limpio=$limpio.trim($noms[$i]);
        }

        return $limpio;
    }

    function convertirMinusculas($nom){
        $mis=strtolower($nom);
        return $mis;
    }

    function obtenerInstitucion($ins){
        $in2=substr(strtolower($ins), 0, 1);
        return $ini2;
    }

    function obtenerAnio2($anio){
        $dos="";
        for($i=2;$i<4;$i++){
            $dos=$dos.$anio[$i];
        }
        return $dos;
    }

    function generarUsuario($nom, $ins, $anio){
        $usuario=$nom.$ins.$anio;
        return $usuario;
    }

?>