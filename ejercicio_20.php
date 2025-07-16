<h1>Ejercicio 20</h1>
<?php

    /* Utiliza la función filter_var para comprobar si el
    email que nos llega por URL es un email valido.*/

    function validate_email($email){
        if($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return "El email proporcionado: $email <b>es válido.</b>";
            }
            
            return "El email proporcionado: $email <b>no es válido.</b>";
            
        }
        
        return "El parametro 'email' no ha sido proporcionado.";
    };
    
    $email = $_GET['email'] ?? '';
    echo validate_email($email);

?>
