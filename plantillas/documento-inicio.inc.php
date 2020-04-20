<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            if(!isset($titulo) || empty($titulo)){
                $titulo = "Blog De JavaDevOne";
            }
            echo "<title>$titulo</title>";
        ?>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <meta name="description" content="Ayuda para los motores de busqueda como goole.com">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS; ?>bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS; ?>estilos.css">
    </head>
    <body>
