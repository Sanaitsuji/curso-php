<?php require_once 'connect.php'?>
<!DOCTYPE html>

<html>
    <head lang="es">
        <meta charset="UTF-8"/>
        <title>Web con PHP</title>

        <link type="text/css" rel="stylesheet" href="assets/components/bootstrap/dist/css/bootstrap.min.css"/>
        <script type="text/javascript" src="assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/components/jquery/node_modules/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Web con PHP</h1>
            <hr/>
            <?php if( isset($_SESSION['logged']) ){ ?>
                <div class="col-lg-10">
                    <a href='index.php' class='btn btn-success'>Home</a>
                    <a href="create_user.php" class="btn btn-primary">Crear usuario</a>
                </div>

                <br/>

                <div class="col-lg-2">
                    <?php echo "Bienvenido ".$_SESSION['logged']['name']." ".$_SESSION['logged']['surname'];?>
                    <br/><a href="logout.php" >Cerrar Sesión</a>
                </div>

                <hr/>
            <?php } ?>
            <?php $var_test = "Contenido"; ?>