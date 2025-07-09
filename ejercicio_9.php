<h1>Ejercicio 9</h1>
<?php

    /* Mostrar todos los números pares entre 1 y 100.*/
    
    $number = 100;

    for ( $counter = 1; $counter <= $number; $counter++ ) {
        if ( $counter %2== 0) {
            echo "</br>El número $counter es PAR";
        }
    }

?>