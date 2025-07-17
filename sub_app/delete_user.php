<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged']['role'] == 'admin'){
    require_once 'includes/connect.php';
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if($id){
        $sql_delete_user = "DELETE FROM users WHERE id = $id;";
        $delete_user = mysqli_query($database, $sql_delete_user);
    }
}

header('Location: index.php');

?>