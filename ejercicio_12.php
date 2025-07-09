<h1>Ejercicio 12</h1>
<?php

    /* Escribe un programa que muestre la dirección IP del
    usuario que visita nuestra web y si usa Firefox felicitarlo*/
    
    $user_ip = $_SERVER["REMOTE_ADDR"];
    $_SERVER['HTTP_USER_AGENT'];
    $user_browser = $_SERVER["HTTP_USER_AGENT"];
    echo"Tu IP es $user_ip";
    if(strstr( $user_browser, 'Firefox')){
        echo "</br>Felicitaciones por tener Firefox crack";
    }else{
        echo "</br>No usas firefox que noob";
    }


?>