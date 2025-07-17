<?php 
include "includes/redirect.php";
include "includes/header.php"; 

$get_users_sql = "SELECT * FROM users;";
$database_users = mysqli_query($database, $get_users_sql);

$num_tot_users = mysqli_num_rows($database_users);

if($num_tot_users > 0){
    $rows_per_page = 4;
    $page = false;
    if(isset($_GET['page']) && is_numeric($_GET['page'])){
        $page = intval($_GET['page']);
    }

    if(!$page){
        $start = 0;
        $page = 1;
    }else{
        $start = ($page - 1) * $rows_per_page;
    }

    $num_tot_pages = ceil($num_tot_users / $rows_per_page);

    $sql_pagination = "SELECT * FROM users ORDER BY id DESC LIMIT $start, $rows_per_page;";
    $database_users = mysqli_query($database, $sql_pagination);

}else{
    echo "<h2>No hay usuarios registrados</h2>";
    echo "<p>Para crear un usuario, <a href='create_user.php'>haz click aquí</a>.</p>";
}

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
            <?php if($_SESSION['logged']['role'] == 'admin'){ ?>
                <a href='edit_user.php?id=<?= $user['id']?>' class='btn btn-warning'>Editar</a>
            <?php } ?>
            <?php if($_SESSION['logged']['role'] == 'admin' && $_SESSION['logged']['id'] != $user['id']){ ?>
                <a href='delete_user.php?id=<?= $user['id']?>' class='btn btn-danger'>Borrar</a>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
</table>

<?php if($num_tot_users >= 1) { ?>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?page=1"><<<</a></li>
        <?php for( $i = 1; $i <= $num_tot_pages; $i++ ){ ?>
            <?php if( $page == $i ){ ?>
                <li class="page-item"><a class="page-link" href="#"><?=$i?></a></li>
            <?php } else {?>
                <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
            <?php } ?>
        <?php } ?>
        <li class="page-item"><a class="page-link" href="?page=<?=$num_tot_pages?>">>>></a></li>
    </ul>
<?php } ?>
<?php include("includes/footer.php"); ?>