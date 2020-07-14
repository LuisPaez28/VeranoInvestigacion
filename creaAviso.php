<?php 
$titulo = $_POST["titulo"];
$aviso = $_POST["aviso"];
?>
<!--Esta es una de las tarjetas que van a crear los profesores-->
    <div class="card my-3">
        <!--Aqu[i se va a mostrar el encabezado-->
        <h5 class="card-header"><?php echo $titulo?></h5>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <!--Aqui va el aviso-->
               <p><?php echo $aviso ?> </p>  
               <footer class="blockquote-footer"><?php setlocale(LC_TIME,"es_ES");
                echo "Se subió el dia:" . date("d") . " del " . date("m") . " de " . date("Y") . " por: Luis Enrique Fraile Paez" ?></footer>
            </blockquote>
        </div>
    </div>