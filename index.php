<?php
   
    $ruta_completa = parse_url($_SERVER['REQUEST_URI']);
    $ruta = $ruta_completa['path'];
    
    $partes_ruta = explode("/", $ruta);
    $partes_ruta = array_filter($partes_ruta);
    $partes_ruta = array_slice($partes_ruta, 0);
    
    echo '$partes_ruta[0] -> ' . $partes_ruta[0] . "<br>";
    echo '$partes_ruta[1] -> ' . $partes_ruta[1] . "<br>";
    echo '$partes_ruta[2] -> ' . $partes_ruta[2] . "<br>";
    
    if(count($partes_ruta) == 1){
        if($partes_ruta[0] == "otrophp"){
            include_once "vistas/home.php";
        }
    }
