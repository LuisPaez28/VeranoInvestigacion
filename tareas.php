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
    <?php include('navAlumnos.html') ?>
    <!--El cuerpo va a cambiar dependiendo de lo realizado y lo faltante del alumno logeado-->
    <div class="row">
        <!--Este es el lado izquierdo-->
        <div class="column mx-auto">
            <h1>Tareas faltantes</h1>
            <!--Estas son las cartas que se van a mostrar por tarea-->
            <?php include('tareasFaltantes.php') ?>
        </div>
        <!--Este es el lado derecho-->
        <div class="column mx-auto">
            <h1>Tareas reaizadas</h1>
        </div>
    </div>

    <?php include('footer.html') ?>
</body>

</html>