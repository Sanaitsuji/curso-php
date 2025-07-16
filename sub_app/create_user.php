<?php include "includes/redirect.php";?>
<?php require_once 'includes/header.php'?>

<?php
function validate_input($field, $errors){
    if(isset($errors[$field])){
        return '<div class="alert alert-danger">'.$errors[$field].'</div>';
    }
    return '';
}

function set_value_fields($field, $errors, $textarea=false){
    if(isset($errors) && count($errors) >= 1 && isset($_POST[$field])){
        if($textarea){
            echo $_POST[$field];
        }else{
            echo "value='{$_POST[$field]}'";
        }
    }

    echo '';
}

$errors = [];

if(isset($_POST['submit'])) {

    if (!empty($_POST['name']) && 
            strlen($_POST['name']) <= 20 &&
            !is_numeric($_POST['name']) &&
            !preg_match("/[0-9]/", $_POST['name'])){
        $user_name = $_POST['name'];
    }else{
        $user_name = false;
        $errors["name"] = "El nombre debe contener unicamente letras y debe ser de maximo 20 caracteres<br/>";
    }

    if (!empty($_POST['surname']) &&
            !is_numeric($_POST['surname']) &&
            !preg_match("/[0-9]/", $_POST['surname'])){
        $user_surname = $_POST['surname'];
    }else{
        $user_surname = false;
        $errors["surname"] = "El apellido debe contener unicamente letras y debe ser de maximo 20 caracteres<br/>";
    }

    if (!empty($_POST['bio'])){
        $user_bio = $_POST['bio'];
    }else{
        $user_bio = false;
        $errors["bio"] = "La biografía debe ser diligenciada<br/>";
    }

    if (!empty($_POST['email']) &&
            filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $user_email = $_POST['email'];
    }else{
        $user_email = false;
        $errors["email"] = "El email debe contener una estructura valida.<br/>";
    }

    if (!empty($_POST['password']) &&
            strlen($_POST['password']) >= 6){
        $user_password = sha1($_POST['password']);
    }else{
        $user_password = false;
        $errors["password"] = "La contraseña debe tener una longitud mínima de 6 caracteres.<br/>";
    }

    if (!empty($_POST['role'])){
        $user_role = $_POST['role'];
    }else{
        $user_role = false;
        $errors["role"] = "El rol debe ser diligenciado<br/>";
    }

    $image = null;
    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) {

        if(!is_dir('uploads')){
            $dir = mkdir('uploads', 0777, true);
        } else {
            $dir = true;
        }
        
        if($dir){
            $file_name = time()."-".$_FILES['image']['name'];
            $muf = move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$file_name);

            if ($muf){
                $image = $file_name;
            } else {
                $errors['image'] = "Error al subir la imagen";
            }
        }

    }

    // Si no hay errores, insertar usuario en la base de datos
    if(count($errors) == 0){
        $query_insert_user = "INSERT INTO users (name, surname, bio, email, password, role, image)
        VALUES ('{$user_name}', '{$user_surname}', '{$user_bio}', '{$user_email}', '{$user_password}', '{$user_role}', '{$image}');";
        
        $insert_user = mysqli_query($database, $query_insert_user);
    }

}

?>

<h2>Crear usuarios</h2>
<?php if(count($errors) == 0 && isset($_POST['submit'])){ ?>
    <div class='alert alert-success'>Usuario enviado correctamente</div>
<?php } ?>

<form action="" method="POST" enctype="multipart/form-data">

    <label for="name">Nombre:
        <input type="text" name="name" class="form-control" <?php set_value_fields('name', $errors);?>>
        <?php echo validate_input('name', $errors)?>
    </label>
    <br/>

    <label for="surname">Apellido:
        <input type="text" name="surname" class="form-control" <?php set_value_fields('surname', $errors);?>>
        <?php echo validate_input("surname", $errors)?>
    </label>
    <br/>

    <label for="bio">Biografía:
        <textarea name="bio" class="form-control"> <?php set_value_fields('bio', $errors, true);?></textarea>
        <?php echo validate_input("bio", $errors)?>
    </label>
    <br/>

    <label for="email">Email:
        <input type="email" name="email" class="form-control" <?php set_value_fields('email', $errors);?>>
        <?php echo validate_input("email", $errors)?>
    </label>
    <br/>

    <label for="image">Imagen:
        <input type="file" name="image" class="form-control">
    </label>
    <br/>

    <label for="password">Contraseña:
        <input type="password" name="password"  class="form-control">
        <?php echo validate_input("password", $errors)?>
    </label>
    <br/>

    <label for="role">Rol:
        <select name="role" class="form-control">
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <?php echo validate_input("role", $errors)?>
    </label>
    <br/>

    <input type="submit" value="Enviar" name="submit" class="btn btn-success"/>

</form>

<?php require_once 'includes/footer.php'?>