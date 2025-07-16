<?php 
include "includes/redirect.php";
include "includes/header.php"; 

$get_users_sql = "SELECT * FROM users;";
$database_users = mysqli_query($database, $get_users_sql);
?>

<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Ver/Editar</th>
    </tr>
    <?php while ($user = mysqli_fetch_assoc($database_users)) { ?>
    <tr>
        <td><?= $user['name']?></td>
        <td><?= $user['surname']?></td>
        <td><?= $user['email']?></td>
        <td>
            <a href='view_user.php?id=<?= $user['id']?>' class='btn btn-success'>Ver</a>
            <a href='edit_user.php?id=<?= $user['id']?>' class='btn btn-warning'>Editar</a>
        </td>
    </tr>
    <?php } ?>
</table>

<?php include("includes/footer.php"); ?>