<?php require_once 'includes/header.php'; ?>

<?php echo $var_test; ?>
<p>Contactanos</p>
<form method="post" action="">
    <input type="text" name="nombre"/>
    <input type="email" name="email"/>
    <input type="submit" value="Enviar"/>
</form>

<?php require_once 'includes/footer.php'; ?>