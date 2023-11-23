<?php

//Formula
function calcularFactorial($numero) {
    if ($numero < 0) {
        return "El factorial no está definido para números negativos.";
    } elseif ($numero === 0 || $numero === 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

//Impresión

$numero = 7; //Colocar el numero que desea calcular el factorial
$resultado = calcularFactorial($numero);
echo "<h1>El factorial de $numero es: $resultado</h1>";
?>