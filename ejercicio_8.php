<h1>Ejercicio 8</h1>
<?php

    /* Escribir un programa que calcule el factorial de cualquier
     número almacenado en una variable.*/
    
    $number = 12;
    $result = 1;

    for ( $counter = 1; $counter <= $number; $counter++ ) {
        $result *= $counter;
    }

    echo "El resultado del factorial del número $number es: $result";

?>