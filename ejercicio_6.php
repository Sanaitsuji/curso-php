<h1>Ejercicio 6</h1>
<?php

    /* Crear un array llamado mese y que almacene el nombre de los doce meses del año.
    Recorrerlo con un bucle FOR para mostrar por pantalla los doce meses.*/
    
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

    for( $month=0; $month<=11; $month++ ){
        echo "</br>$months[$month]";
    }

?>