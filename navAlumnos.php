<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de navegación</title>
    <!-- CSS, iconos y fuentes para MDB -->
    <link rel="icon" href="Icon/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <!--Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="alumnoInicio.php" class="navbar-brand">
            <img src="Icon/icono.svg" style="width: 20%;" alt="EnlaceUPSin">
            EnlaceUPSin
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a href="alumnoInicio.php" class="nav-link">Clases</a>
                </li>
                <li class="nav-item">
                    <a href="horarioAlumno.php" class="nav-link">Horario</a>
                </li>
                <li class="nav-item">
                    <a href="avisoAlumno.php" class="nav-link">Avisos</a>
                </li>
                <li class="nav-item">
                    <a href="tareas.php" class="nav-link">Tareas</a>
                </li>
                <li class="nav-item">
                    <!--Por lo pronto solo va a fingir que funciona-->
                    <a class="nav-link" href="index.html" onclick="<?php session_destroy() ?>">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Scripts para MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>