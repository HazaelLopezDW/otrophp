<?php
   
    $ruta_completa = parse_url($_SERVER['REQUEST_URI']);
    $ruta = $ruta_completa['path'];
    
    $partes_ruta = explode("/", $ruta);
    $partes_ruta = array_filter($partes_ruta);
    $partes_ruta = array_slice($partes_ruta, 0);
    
    echo '$partes_ruta[0] -> ' . $partes_ruta[0] . "<br>";
    echo '$partes_ruta[1] -> ' . $partes_ruta[1] . "<br>";
    echo '$partes_ruta[2] -> ' . $partes_ruta[2] . "<br>";
    
    $ruta_elegida = "vistas/erro404";
    
    if($partes_ruta[0] == "otrophp"){
        if(count($partes_ruta) == 1){
            $ruta_elegida = "vistas/home.php";
        }else if(count($partes_ruta) == 2){
            switch ($partes_ruta[1]){
                case "entradas":
                    $ruta_elegida = "vistas/entradas.php";
                    break;
                case "registro":
                    $ruta_elegida = "vistas/registro.php";
                    break;
                case "registro-correcto":
                    $ruta_elegida = "vistas/registro-correcto.php";
                    break;
            }
        }
    }
    
    include_once $ruta_elegida;
