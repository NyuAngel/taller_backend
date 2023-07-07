<?php

include 'method_get_3.html';

$edad = 0;
    
if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];
    
    echo "El Nombre Registrado es: ".$nombre."<br>";
    echo "El Apellido Registrado es: ".$apellido."<br>";
    echo "El Número de Documento es: ".$cedula."<br>";

    }

?>
