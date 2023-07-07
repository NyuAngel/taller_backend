<?php
    
include 'edad_exacta_4.html';    


const constante_18 = 18;
define  ("constante0", "0");

    
if (isset($_POST['verificar'])) {

    $fecha = new DateTime($_POST['fecha']);

    $date2 = new DateTime(date("y-m-d"));

    $fecha_actual = $fecha->diff($date2);

    $edad_actual = $fecha_actual->y;
    $edad_meses = $fecha_actual->m;
    $edad_dias = $fecha_actual->d;
    
    if ($edad_actual >= constante_18) {
        echo "<h1> Usted es mayor de edad, dado que tiene " .$edad_actual.  " años </h1>";
    }
    else if ($edad_actual < constante_18 && $edad_actual > constante0) {
        echo "<h2> Usted es menor de edad, dado que tiene " .$edad_actual. " años </h2>";
    }
    else{
        echo "<h2> No valido </h2>";
    }

    
    echo "<br> <b>Usted tiene:  ".$edad_actual."  años de edad   con   ".$edad_meses." meses   y   ".$edad_dias."  días </b>";

}

?>
