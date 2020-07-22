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

  <div class="card text-center mx-2 my-2">
    <div class="card-body">
      <h2 class="card-title">Mandar nueva tarea</h2>
      <p class="card-text">Presiona el botón para mandar una nueva tarea</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
        Crear
      </button>
    </div>
  </div>

  <!-- Modal de nueva tarea -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <!--Nueva tarea-->
            <h2 class="text-center">Nueva tarea</h2>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!--Formulario para crear un aviso-->
          <div class="card  my-2">
            <form name="crearAviso" action="creaAviso.php" method="POST">

              <div class="row">
                <div class="col form-group mx-2 mt-4">
                  <label for="Titutlos">Titulo: </label>
                  <textarea class="form-control" rows="1" name="titulo" id="titulo"></textarea>
                </div>

                <div class="col form-group mx-2 mt-4">
                  <label for="exampleFormControlSelect1">Grupo</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>

              <div class="form-group mx-2">
                <label for="exampleFormControlSelect1">Materia</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Cálculo Integral</option>
                  <option>Cálculo Diferencial</option>
                  <option>Administración de bases de datos</option>
                  <option>Programación Web II</option>
                  <option>Fundamentos de Programación</option>
                </select>
              </div>
              <div class="form-group mx-2">
                <label for="avisos">Explicación: </label>
                <textarea class="form-control" rows="10" name="aviso" id="aviso"></textarea>
              </div>


              <div class="form-group mx-2">
                <label for="exampleFormControlFile1">Añadir archivo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

              <input class="btn btn-blue-grey d-flex justify-content-end" type="submit" value="Publicar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('tareasMandadas.php') ?>

  <!--El footer-->
  <?php include('footer.html') ?>
  <!-- Scripts para el MDB -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>