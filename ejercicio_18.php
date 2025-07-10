<h1>Ejercicio 18</h1>
<?php

    /* Utiliza una función en PHP para mostrar la fecha actual por pantalla.*/
    date_default_timezone_set('America/Bogota'); // Set timezone to Madrid
    $act_date = getdate();
    echo "La hora y fecha actuales son:";
    echo "</br>&#9;Fecha: $act_date[mday]/$act_date[mon]/$act_date[year]";
    echo "</br>&#9;Hora: $act_date[hours]:$act_date[minutes]";

?>
