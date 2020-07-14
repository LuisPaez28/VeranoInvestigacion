<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- CSS, iconos y fuentes para MDB -->
    <link rel="icon" href="Icon/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <!--Aqupi va a cambiar la barra de navegaci[on para mostrar un apartado de las tareas de acuerdo a su grupo
    horario, inicio y para cerrar la sesi[on-->
    <!--NAV-->
    <?php include('navDocente.php') ?>
    <!--Contenido en el que se van a mstrar las clases respecto a el grupo.
    Este contenido se repite dependiendo del numero de materias que tenga en ese grupo.
    Estas tarjetas tambien se van a llenar con php y la base de datos-->
    <?php include('cardDocente.php') ?>

    <!--El footer-->
    <?php include('footer.html')?>
    <!-- Scripts para el MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>