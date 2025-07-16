<h1>Ejercicio 13</h1>
<?php

    /* Un programa que añada valores a un array
    mientras que su longitud sea menor a 100 y después
    que se muestre la información de array por pantalla.*/

    $dynamic_list = [];
    while( count($dynamic_list) < 100 ) {
        array_push($dynamic_list, rand(0, 100));
    }
    echo "La lista final es: ";
    var_dump( $dynamic_list );

?>