<?php require_once 'includes/header.php'?>

<h2>Crear usuarios</h2>

<form method="POST" action="process_user_creation.php" enctype="multipart/form-data">

    <label for="name">Nombre:
        <input type="text" id="name" name="name" class="form-control" required>
    </label>
    <br/>

    <label for="surname">Apellido:
        <input type="text" id="surname" name="surname" class="form-control" required>
    </label>
    <br/>

    <label for="bio">Biografía:
        <textarea id="bio" name="bio" class="form-control" ></textarea>
    </label>
    <br/>

    <label for="email">Email:
        <input type="email" id="email" name="email" class="form-control" required>
    </label>
    <br/>

    <label for="image">Imagen:
        <input type="file" id="image" name="image" class="form-control" >
    </label>
    <br/>

    <label for="password">Contraseña:
        <input type="password" id="password" name="password"  class="form-control" required>
    </label>
    <br/>

    <label for="role">Rol:
        
            <select id="role" name="role" class="form-control">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        
        </label>
        <br/>

    <input type="submit" value="Enviar" class="btn btn-success"/>

</form>

<?php require_once 'includes/footer.php'?>