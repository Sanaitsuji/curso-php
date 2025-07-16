<h1>Ejercicio 17</h1>
<?php

    /* Crea una funcion para calcular el factorial de un numero.*/

    function factorial($number) {
        if ($number < 2){
            return 1;
        }
        
        return factorial($number - 1) * $number;
    }

    echo "El factorial de 6 es: " . factorial(6) . "<br>";
?>