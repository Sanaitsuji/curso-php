<h1>Ejercicio 4</h1>
<?php

    /* Escribe un programa que multiplique los primeros 20 números naturales.*/

    $number = 1;
    $result = 1;
    while ($number <= 20) {
        echo"</br>numero: $number";
        $result *= $number;
        $number++;
        echo"///// result: $result";
    }

    echo "</br>El resultado de la multiplicación de los primeros 20 números naturales es: $result";
    
?>