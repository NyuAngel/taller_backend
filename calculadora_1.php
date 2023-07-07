<?php
/* La sentencia include incluye y evalua el archivo especificado*/
include 'calculadora_1.html'; 
/*Las variables se representan con un signo $*/
$n1 =  $n2 = $tipo = $result = 0;
/* If nos permite la ejecución condicional de fragmentos de código*/    
if (isset($_POST['operar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $tipo = $_POST['tipo'];
/*La sentencia Switch es es similar a una serie de sentencias IF, funciona para comparar la misma variable con muchos valores diferentes y ejecutar una parte de código dependiendo de a que a que valor es igual*/
    switch ($tipo) {
        case '1':
                $result = $n1 + $n2;
                break;
        case '2':
                $result = $n1 - $n2;
                break;
        case '3':
                $result = $n1 * $n2;
                break;
        case '4':
                $result = $n1 / $n2;
                break;
        }

        echo "<h1>" . $result . "</h1>";
        #echo "<script>alert(".$result.");</script>";
}

?>

