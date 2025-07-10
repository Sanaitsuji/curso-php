<h1>Ejercicio 22</h1>
<?php

    /* Crea una función a la que le pases un número y
     retorne su tabla de multiplicar.*/

    function multiplication_table($number, $html = null){
        if(!is_numeric($number)){
            return "El valor ingresado '$number' no es un número válido.";
        }
        $text_return = "<h2>Tabla de multiplicar del número $number</h2>";
        $text_return .= "<table border='1'>";
        $text_return .= "<tr><th>Multiplicación</th><th>Resultado</th></tr>";

        for($i = 0; $i <= 10; $i++){
            $result = $number * $i;
            $text_return .= "<tr><th>$number x $i</th><th>$result</th></tr>";
        }

        $text_return .= "</table>";

        if($html){
            echo "Si es HTML :)";
        }

        return $text_return;
    };
    
    $number = $_GET['number'] ?? '';
    echo multiplication_table($number, true);

?>
