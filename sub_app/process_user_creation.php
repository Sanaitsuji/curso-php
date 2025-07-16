<?php require_once 'includes/header.php'?>

<h2>Información del nuevo usuario</h2>

<?php

    if (isset($_POST)) {

        echo "<h2>Datos recibidos:</h2>";
        if (!empty($_POST['name']) && 
                strlen($_POST['name']) <= 20 &&
                !is_numeric($_POST['name']) &&
                !preg_match("/[0-9]/", $_POST['name'])){
            echo "Nombre: ".$_POST['name']."<br/>";
        }else{
            echo "El nombre debe contener unicamente letras y debe ser de maximo 20 caracteres<br/>";
        }

        if (!empty($_POST['surname']) &&
                !is_numeric($_POST['surname']) &&
                !preg_match("/[0-9]/", $_POST['surname'])){
            echo "Apellido: ".$_POST['surname']."<br/>";
        }else{
            echo "El apellido debe contener unicamente letras y debe ser de maximo 20 caracteres<br/>";
        }

        if (!empty($_POST['bio'])){
            echo "Biografía: ".$_POST['bio']."<br/>";
        }else{
            echo "La biografía debe ser diligenciada<br/>";
        }

        if (!empty($_POST['email']) &&
                filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "Email: ".$_POST['email']."<br/>";
        }else{
            echo "El email debe contener una estructura valida.<br/>";
        }

        if (!empty($_POST['password']) &&
                strlen($_POST['password']) >= 6){
            echo "Contraseña: ".sha1($_POST['password'])."<br/>";
        }else{
            echo "La contraseña debe tener una longitud mínima de 6 caracteres.<br/>";
        }

        if (!empty($_POST['role'])){
            echo "Rol: ".$_POST['role']."<br/>";
        }else{
            echo "El rol debe ser diligenciado<br/>";
        }
        
    } else {
        echo "<h2>No se han recibido datos.</h2>";
    }

?>

<?php require_once 'includes/footer.php'?>