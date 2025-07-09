<h1>Ejercicio 3</h1>
<?php

    /* Modificar el ejercicio anterior para que además muestre al
     lado si el número es par o impar.*/

    for( $number=1; $number<=30; $number++ ){
        $square = pow( $number, 2 );
        echo"</br>El cuadrado del número $number es: $square.";
        if( $square % 2 == 0){
            echo" Este número es par.";
        }else{
            echo" Este número es impar.";
        }
    }
    
?>