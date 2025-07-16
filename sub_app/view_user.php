<?php include "includes/redirect.php";?>
<?php require_once "includes/header.php"; ?>

<?php
$user_id = isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : false;

if(!$user_id){
    echo "<h2>Error: ID de usuario no válido/no encontrado.</h2>";
} 

$id = $_GET['id'];
$user_query_sql = "SELECT * FROM users WHERE id = $id;";
$user_query_result = mysqli_query($database, $user_query_sql);
$user = mysqli_fetch_assoc($user_query_result);

if(!isset($user['id']) || empty($user['id'])){
    header("Location: index.php");
} 

?>

<?php if( $user["image"] != null ){ ?>
<div class="col-lg-2">
        <img src="uploads/<?php echo $user['image'];?>" width="120"/><br/>

</div>
<?php } ?>
<div class="col-lg-7">
    <h3><strong><?php echo $user['name']." ".$user['surname']; ?></strong></h3>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Biografía:</strong> <?php echo $user['bio']; ?></p>
</div>

<div class="clearfix"></div>

<?php require_once "includes/footer.php"; ?>
