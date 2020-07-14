<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <!-- CSS, iconos y fuentes para MDB -->
    <link rel="icon" href="Icon/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <?php include('navAlumnos.php') ?>
    <!--El cuerpo va a cambiar dependiendo de lo realizado y lo faltante del alumno logeado-->
    <div class="row">
        <!--Este es el lado izquierdo-->
        <div class="col-sm-6 text-center">
            <div class="card">
                <h1>Tareas faltantes</h1>
            </div>
            <!--Estas son las cartas que se van a mostrar por tarea faltante-->
            <?php include('tareasFaltantes.php') ?>
        </div>
        <!--Este es el lado derecho-->
        <div class="col-sm-6 text-center">
            <div class="card">
                <h1>Tareas realizadas</h1>
            </div>
            <!--Estas son mas tarjetas que se van a mostrar por tarea entregada-->
            <?php include('tareasRealizadas.php') ?>
        </div>
    </div>

    <?php include('footer.html') ?>
    <!-- Scripts para el MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>