<?php

$conexion = new mysqli("localhost", "id17414663_eveelin", "Qv+8I4{*flqDLLFB","id17414663_practicasezfl" );
    if($conexion){
        echo "la gestion fue exitosa !!";
        /* header("Location: index.php"); */
    }else{
        echo "Fallo la gestion";
    }
?>