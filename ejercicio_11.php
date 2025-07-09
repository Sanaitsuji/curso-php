<h1>Ejercicio 11</h1>
<?php

    /* Hacer un programa que tenga un array de 5 números
    enteros y hacer lo siguiente:
    
    1. Recorrerlo y mostrarlo
    2. Ordenarlo y mostrarlo
    3. Mostrar su longitud
    4. Buscar el vector*/
    
    $numbers_list = [8, 2, 5, 7, 1];
    $list_lenght = count($numbers_list);

    echo "<h2>Paso 1. Recorrer y mostrar</h2>";
    foreach($numbers_list as $number) {
        echo "$number,";
    }

    echo "<h2>Paso 2. Ordenar y mostrar</h2>";

    sort($numbers_list);
    foreach($numbers_list as $number) {
        echo "$number,";
    }

    echo "<h2>Paso 3. Mostrar longitud</h2>
        </br>La longitud de la lista es de $list_lenght";

    echo "<h2>Paso 4. Buscar vector</h2>";
    $to_search = 50;
    $finded = array_search($to_search, $numbers_list);
    if($finded) {
        echo "</br>El objetivo $to_search esta en la posición $finded";
    }else{
        echo "</br>El objetivo $to_search no se encuentra dentro de la lista";
    }

?>