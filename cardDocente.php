<?php
session_start();
//Aqui se va a tomar acceso a la base de datos para trabajar con ella
//Los valores se van a susttuir por los de la base de datos. y en lugar de trabajar con sessiones se va a trabajar directamente
//Y no se va a trabajar con arreglos, o quien sabe jaja
$grupos = array(1,2,9,1,5,7);
$docente = "Luis Enrique Fraile Paez";
$horarios = array("8:00 a.m a 9:00 a.m","9:00 a.m a 10:00 a.m","10:00 a.m a 11:00 a.m","11:00 a.m a 12:00 a.m","12:00 a.m a 1:00 p.m","1:00 p.m a 2:00 p.m");
$materias = array("Calculo Diferencial","Calculo Integral","Fundamentos de Investigación","Ética","Fundamentos de programación","Administracion");
$_SESSION["grupos"] = $grupos;
$_SESSION["horarios"] = $horarios;
$_SESSION["materias"] = $materias;


for ($i = 0; $i < count($materias); $i++) {
    echo "<div class='card mx-5 my-1'>
<div class='card-header'>Grupo $grupos[$i]</div>
<div class='card-body'>
    <h5 class='card-title'>$materias[$i]</h5>
    <footer class='blockquote-footer'>Recuerda que solo puedes entrar de <b>$horarios[$i]</b></footer>
    <a href='#' class='btn btn-primary'>Ir a clase</a>
</div>
</div>";
}