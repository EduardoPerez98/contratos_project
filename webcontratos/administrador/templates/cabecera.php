<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/webcontratos"; ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        
            <img src="../img/LOGO DGDSE UNACH.jpg" width="80 px" height="80 px" class="d-inline-block align-top" alt="">
            Universidad Autonoma de Chiapas
        
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/contratos.php">Contratos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Cerrar sesión</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">