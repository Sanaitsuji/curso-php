<h1>Ejercicio 5</h1>
<?php

    /* Imprimir por pantalla la tabla de multiplicar del
     número enviado a traves de un parámetro GET por la URL.*/
    
    if(isset($_GET["param"]) && is_numeric($_GET["param"])){
        $param = $_GET["param"];
    }else{
        echo "</br><h2>El parametro param no existe o no es numerico</br>";
        echo "El número por defecto es 0</h2>";
        $param = 0;
    }

    echo "</br><h2>Tabla de multiplicar del número $param</h2>";
    for ( $number=0; $number<=10; $number++){
        $result = $param * $number;
        echo "</br>$param x $number = $result";
    }
    
?>