<h1>Ejercicio 15</h1>
<?php

    /* Crea un script PHP que tenga 3 variables; un string, un array y un boleano.
    Debe imprimir un mensaje segun el tipo de variable que se este usando*/

    $a_string = "Una cadena de texto";
    $an_array = [1, 2, 3, 4, 5];
    $a_boolean = true;

    $var_type = gettype($a_string); 
    if(is_string($a_string)){
        echo "</br>Bonita cadena de texto bruh.";
    }else if(is_array($a_string)){
        echo "</br>A este array le falta orden? .";
    }else if(is_bool($a_string)){
        echo "</br>Ser o no ser he ahí el booleano.";
    }else{
        echo "</br>Esta variable es de tipo: <b>$var_type</b>.";
    }
        
    $var_type = gettype($an_array); 
    if(is_string($an_array)){
        echo "</br>Bonita cadena de texto bruh.";
    }else if(is_array($an_array)){
        echo "</br>A este array le falta orden? .";
    }else if(is_bool($an_array)){
        echo "</br>Ser o no ser he ahí el booleano.";
    }else{
        echo "</br>Esta variable es de tipo: <b>$var_type</b>.";
    }

    $var_type = gettype($a_boolean); 
    if(is_string($a_boolean)){
        echo "</br>Bonita cadena de texto bruh.";
    }else if(is_array($a_boolean)){
        echo "</br>A este array le falta orden? .";
    }else if(is_bool($a_boolean)){
        echo "</br>Ser o no ser he ahí el booleano.";
    }else{
        echo "</br>Esta variable es de tipo: <b>$var_type</b>.";
    }

    $a_number = 1234;
    $var_type = gettype($a_number); 
    if(is_string($a_number)){
        echo "</br>Bonita cadena de texto bruh.";
    }else if(is_array($a_number)){
        echo "</br>A este array le falta orden? .";
    }else if(is_bool($a_number)){
        echo "</br>Ser o no ser he ahí el booleano.";
    }else{
        echo "</br>Esta variable es de tipo: <b>$var_type</b>.";
    }
?>