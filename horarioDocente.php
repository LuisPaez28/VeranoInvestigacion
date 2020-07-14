<?php
session_start();
if (isset($_SESSION["grupos"])) {
    $grupos = $_SESSION["grupos"];
    $horarios = $_SESSION["horarios"];
    $materias = $_SESSION["materias"];
} else {
    echo "algo esta mal en la matrits jajaja";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <!-- CSS, iconos y fuentes para MDB -->
    <link rel="icon" href="Icon/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <?php include('navDocente.php') ?>
    <!--El cuerpo va a cambiar dependiendo de lo realizado y lo faltante del alumno logeado-->
    <!--Tabla-->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><b>Materia</b></th>
                <th scope="col"><b>Lunes</b></th>
                <th scope="col"><b>Martes</b></th>
                <th scope="col"><b>Miercoles</b></th>
                <th scope="col"><b>Jueves</b></th>
                <th scope="col"><b>Viernes</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $materias[0] ?> <br> Grupo <?php echo $grupos[0] ?> </th>
                <td>9:00-10:00</td>
                <td>9:00-10:00</td>
                <td>9:00-10:00</td>
                <td>9:00-10:00</td>
            </tr>
            <th scope="row"><?php echo $materias[1] ?> <br> Grupo <?php echo $grupos[1] ?></th>
            <td>8:00-9:00</td>
            <td>8:00-9:00</td>
            <td>8:00-9:00</td>
            <td>8:00-9:00</td>
            </tr>
            <th scope="row"><?php echo $materias[2] ?> <br> Grupo <?php echo $grupos[2] ?></th>
            <td>1:00-2:00</td>
            <td>1:00-2:00</td>
            <td>1:00-2:00</td>
            <td>1:00-2:00</td>
            </tr>
            <th scope="row"><?php echo $materias[3] ?> <br> Grupo <?php echo $grupos[3] ?></th>
            <td>7:00-8:00</td>
            <td>7:00-8:00</td>
            <td>7:00-8:00</td>
            <td>7:00-8:00</td>
            <td>7:00-8:00</td>
            </tr>
            <th scope="row"><?php echo $materias[4] ?> <br> Grupo <?php echo $grupos[4] ?></th>
            <td>10:00-11:00</td>
            <td>10:00-11:00</td>
            <td>10:00-11:00</td>
            <td>10:00-11:00</td>
            <td>10:00-11:00</td>
            </tr>
            <th scope="row"><?php echo $materias[5] ?> <br> Grupo <?php echo $grupos[5] ?></th>
            <td>12:00-1:00</td>
            <td>12:00-1:00</td>
            <td>12:00-1:00</td>
            <td>12:00-1:00</td>
            <td>12:00-1:00</td>
            </tr>
        </tbody>
    </table>
    <?php include('footer.html') ?>
    <!-- Scripts para el MDB -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>