<h1>Ejercicio 10</h1>
<?php

    /* Mostrar los números múltiplos de un número pasado
    por la URL que hay del 1 al 100.*/
    
    if(isset($_GET["param"]) && is_numeric($_GET["param"])){
        $param = $_GET["param"];
        if ($param == 0) {
            echo"</br><h2>No se pueden determinar los multiplos de 0</br>";
            echo "El número por defecto es 1</h2>";
            $param = 1;
        }           
    }else{
        echo "</br><h2>El parametro param no existe o no es numerico</br>";
        echo "El número por defecto es 1</h2>";
        $param = 1;
    }

    for ( $counter = 1; $counter <= 100; $counter++ ) {
        if ( $counter % $param == 0) {
            echo "</br>El número $counter es múltiplo de $param";
        }
    }

?>