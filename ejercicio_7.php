<h1>Ejercicio 7</h1>
<?php

    /* Crear un array llamado mese y que almacene el nombre de los doce meses del año.
    Recorrerlo con un bucle FOREACH para mostrar por pantalla los doce meses.*/
    
    $months = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"];

    foreach( $months as $month ){
        echo "</br>$month";
    }

?>