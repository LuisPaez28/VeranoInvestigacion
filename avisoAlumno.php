<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos</title>
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
<!--Esta es una de las tarjetas que van a crear los profesores-->
    <div class="card my-3">
        <!--Aqu[i se va a mostrar el encabezado-->
        <h5 class="card-header"><?php echo "Examen"?></h5>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <!--Aqui va el aviso-->
               <p><?php echo "Examen de Adminstración de redes el 4 de Julio a las 11:00 a.m" ?> </p>  
               <footer class="blockquote-footer"><?php setlocale(LC_TIME,"es_ES");
                echo "Se subió el dia:" . date("d") . " del " . date("m") . " de " . date("Y") . " por: Missael Flores Gonsalez" ?></footer>
            </blockquote>
        </div>
    </div>
<!--Esta es una de las tarjetas que van a crear los profesores-->
<div class="card my-3">
        <!--Aqu[i se va a mostrar el encabezado-->
        <h5 class="card-header"><?php echo "Exposicion"?></h5>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <!--Aqui va el aviso-->
               <p><?php echo "Expone el equipo 3 el proximo lunes a las 6:00" ?> </p>  
               <footer class="blockquote-footer"><?php setlocale(LC_TIME,"es_ES");
                echo "Se subió el dia:" . date("d") . " del " . date("m") . " de " . date("Y") . " por: Rosa Aurora Estrada" ?></footer>
            </blockquote>
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