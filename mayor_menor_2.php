<?php

include 'mayor_menor_2.html';


const constante_18 = 18;
define ("constante0","0"); /*Define una constante con nombre */
    
if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= constante_18) {
        echo "<h1> Es mayor de edad</h1>";
    }
    else if ($edad < constante_18 && $edad > constante0) {
        echo "<h2>Es menor de edad</h2>"; /* else if Es una combinación para que la expresión alternativa se ejecute si la condición se evalúa como true*/
    }
    else{
        echo "<h2>No valido</h2>";
        }

    }

?>
