<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faltantes</title>
    <!-- CSS, iconos y fuentes para MDB -->
    <link rel="icon" href="Icon/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <?php $i = 0; while($i < 5){ ?>
    <!--Esta es una de las tarjetas que se vna a ostrar, el numero de ellas, obviamente esto se va a tratar con php-->
    <div class="card my-1">
        <div class="card-header">
            <?php echo "Materia" ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo "Nombre de Tarea" ?></h5>
            <p class="card-text"><?php echo "La tarea es crear la cura para el covid-19" ?></p>
            <!--El link lo va a llevar a esa tarea-->
            <a href="<?php echo "#" ?>" class="btn btn-primary">Ir a la tarea</a>
            <div class="card-footer text-muted">
                <?php $num=rand(1,10); echo "Quedan $num dias para entregar"?>
            </div>
        </div>
    </div>
    <?php $i++; }?>
    <!-- Scripts para el MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>