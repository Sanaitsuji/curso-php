<?php 
session_start();
if(isset($_SESSION['logged'] )) {
    header('Location: index.php');
}
?>
<?php require_once 'includes/header.php'; ?>

<h2>Identificate</h2>
<div class="col-lg-5" style="padding-left: 0px;">
    <?php if ( isset($_SESSION['error_login']) ){ ?>
        <div class="alert alert-danger"><?= $_SESSION['error_login']; ?></div>
    <?php } ?>

    <form action="login_user.php" method="POST">

        Usuario: <input type="text" name="email" class="form-control">
        Contraseña: <input type="password" name="password" class="form-control">
        <br/>
        <input type="submit" class="btn btn-success" name="submit" value="Entrar">

    </form>
</div>
<div class="clearfix"></div>

<?php require_once 'includes/footer.php'; ?>