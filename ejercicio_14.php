<h1>Ejercicio 14</h1>
<?php

    /* Escribe un programa que compruebe si una variable
    esta vacía y si está vacía, rellenarla con texto en
    minúsculas y mostrarlo convertido a mayúsculas en
    negrita*/

    if(isset($_GET["param"])){
        $param = $_GET["param"];
        echo "El valor registrado es $param";
    }else{
        $param = strtoupper(bin2hex(random_bytes(10)));
        echo "El texto generado autimaticamente es: <b>$param</b>";
    }

?>