<?php
//Aqui se va a tomar acceso a la base de datos para trabajar con ella
//Los valores se van a susttuir por los de la base de datos
$grupo = "uno";
$docente = "Luis Enrique Fraile Paez";
$materia = "Calculo Diferencial";
$horario = "8:00 a.m a 9:00 a.m";

for ($i = 0; $i < 6; $i++) {
    echo "<div class='card mx-5 my-1'>
<div class='card-header'>Grupo $grupo</div>
<div class='card-body'>
    <h5 class='card-title'>$materia</h5>
    <p class='card-text'><b>Docente:</b> $docente </p>
    <footer class='blockquote-footer'>Recuerda que solo puedes entrar de <b>$horario</b></footer>
    <a href='#' class='btn btn-primary'>Ir a clase</a>
</div>
</div>";
}
