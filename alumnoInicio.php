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
    <?php include('navAlumnos.html') ?>
    <!--Contenido en el que se van a mstrar las clases respecto a el grupo.
    Este contenido se repite dependiendo del numero de materias que tenga en ese grupo.
    Estas tarjetas tambien se van a llenar con php y la base de datos-->
    <div class="card mx-5 my-1">
        <div class="card-header">Grupo Uno</div>
        <div class="card-body">
            <h5 class="card-title">Calculo diferencial</h5>
            <p class="card-text"><b>Docente:</b> Luis Enrique Fraile Páez</p>
            <footer class="blockquote-footer">Recuerda que solo puedes entrar de <b>8:00 a.m a 9:00 a.m</b></footer>
            <a href="#" class="btn btn-primary">Ir a clase</a>
        </div>
    </div>
    <?php include('cardAlumno.php') ?>

    <!--El footer-->
    <?php include('footer.html')?>
    <!-- Scripts para el MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>