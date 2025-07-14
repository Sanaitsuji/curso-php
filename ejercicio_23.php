<?php

    /* Crea una sesión que vaya aumentando su valor en 
    uno o disminuyendo en uno en función de si el
    parámetro GET "counter" está en uno 0 cero.*/

    session_start();
    echo "<h1>Ejercicio 22</h1>";
    $_SESSION['counter'] = isset($_SESSION['counter']) ? $_SESSION['counter'] : 0;

    if (isset($_GET['counter'])) {
        if ($_GET['counter'] == 1) {
            $_SESSION['counter']++;
        } elseif ($_GET['counter'] == 0) {
            $_SESSION['counter']--;
        }
    }else{
        echo "No se ha encontrado el parámetro 'counter'.";
    }

    echo "Has visitado el sitio: " . $_SESSION['counter']." veces.";

?>
