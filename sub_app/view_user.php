<?php require_once "includes/header.php"; ?>

<?php
$user_id = isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : false;

if(!$user_id){
    echo "<h2>Error: ID de usuario no válido/no encontrado.</h2>";
    echo "<a href='index.php' class='btn btn-secondary'>Volver</a>";
} else {
    $query_select_user = "SELECT * FROM users WHERE id = $user_id;";
    $user = mysqli_query($database, $query_select_user);

    if(mysqli_error($database)){
        echo "<h2>Error al consultar el usuario: " . mysqli_error($database) . "</h2>";
        echo "<a href='index.php' class='btn btn-secondary'>Volver</a>";
    }

    if($user && mysqli_num_rows($user) > 0){
        $user_data = mysqli_fetch_assoc($user);
        echo "<table class='table'>";
        echo "  <tr colspan='2'><th>Información del Usuario</th></tr>";
        echo "  <tr><td>Nombre:</td><td>".$user_data['name']."</td></tr>";
        echo "  <tr><td>Apellido:</td><td>".$user_data['surname']."</td></tr>";
        echo "  <tr><td>Email:</td><td>".$user_data['email']."</td></tr>";
        echo "  <tr><td>Biografía:</td><td>".$user_data['bio']."</td></tr>";
        echo "  <tr><td>Role:</td>";
        if($user_data['role'] == 'admin'){
            echo "<td>Administrador</td></tr>";
        } else {
            echo "<td>Usuario</td></tr>";
        }
        echo"   <tr><td>Fecha de creación:</td><td>".$user_data['created_at']."</td></tr>";
        echo "</table>";

        echo "<a href='index.php' class='btn btn-secondary'>Volver</a>";
    }else{
        echo "<h2>Error: No se ha encontrado el usuario con el ID $user_id.</h2>";
        echo "<a href='index.php' class='btn btn-secondary'>Volver</a>";
    }
}
?>

<?php require_once "includes/footer.php"; ?>
