<?php
session_start();
//Aqui se va a tomar acceso a la base de datos para trabajar con ella
//Los valores se van a susttuir por los de la base de datos
$grupo = "uno";
$docentes = array("Luis Enrique Fraile Paez", "María Erika Páez García","Erick Alfredo Fraile Páez","Missael Flores Gonsalez","Osvaldo Bosquez García","Esly Rodriguez Pichardo");
$horario = "8:00 a.m a 9:00 a.m";
$materias = array("Calculo Diferencial","Calculo Integral","Fundamentos de Investigación","Ética","Fundamentos de programación","Administracion");

$_SESSION["docentes"] = $docentes;
$_SESSION["materias"] = $materias;


for ($i = 0; $i < count($materias); $i++) {
    echo "<div class='card mx-5 my-1'>
<div class='card-header'>Grupo $grupo</div>
<div class='card-body'>
    <h5 class='card-title'>$materias[$i]</h5>
    <p class='card-text'><b>Docente:</b> $docentes[$i] </p>
    <footer class='blockquote-footer'>Recuerda que solo puedes entrar de <b>$horario</b></footer>
    <a href='#' class='btn btn-primary'>Ir a clase</a>
</div>
</div>";
}
