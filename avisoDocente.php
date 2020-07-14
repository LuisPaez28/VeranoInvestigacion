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
    <?php include('navDocente.php') ?>

    <h2 class="text-center">Crear Aviso</h2>
    <!--Formulario para crear un aviso-->
    <div class="card  my-2">
        <form name="crearAviso" action="creaAviso.php" method="POST">
            <div class="form-group mx-2">
                <label for="Titutlos">Titulo: </label>
                <textarea class="form-control" rows="1" name="titulo" id="titulo"></textarea>
            </div>
            <div class="form-group mx-2">
                <label for="avisos">Aviso: </label>
                <textarea class="form-control" rows="3" name="aviso" id="aviso"></textarea>
            </div>
            <input class="btn btn-blue-grey float-md-right" type="submit" value="Publicar">
        </form>
    </div>
    <h2 class="text-center">Avisos</h2>
    <!--Esta es una de las tarjetas que van a crear los profesores-->
    <div class="card my-3">
        <!--Aqu[i se va a mostrar el encabezado-->
        <h5 class="card-header"><?php echo "Examen" ?></h5>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <!--Aqui va el aviso-->
                <p><?php echo "Examen de Adminstración de redes el 4 de Julio a las 11:00 a.m" ?> </p>
                <footer class="blockquote-footer"><?php setlocale(LC_TIME, "es_ES");
                                                    echo "Se subió el dia:" . date("d") . " del " . date("m") . " de " . date("Y") . " por: Missael Flores Gonsalez" ?></footer>
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