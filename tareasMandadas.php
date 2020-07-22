<?

echo "  <!--Aqui se van a mostrar las tareas que ya encargo dependiendo del grupo-->
<div class='row'>
  <div class='col-4'>
    <div id='list-example' class='list-group'>
      <a class='list-group-item list-group-item-action active' href='#list-item-1'>Gurpo 1</a>
      <a class='list-group-item list-group-item-action' href='#list-item-2'>Grupo 2</a>
      <a class='list-group-item list-group-item-action' href='#list-item-3'>Grupo 3</a>
      <a class='list-group-item list-group-item-action' href='#list-item-4'>Grupo 4</a>
    </div>
  </div>
  <div class='col-8'>
    <div data-spy='scroll' data-target='#list-example' data-offset='0' class='scrollspy-example z-depth-1'>
      <h4 id='list-item-1' class='text-center'>Grupo 1</h4>

        <div class='card my-2 text-left mx-2'>
            <div class='card-header'> Materia
            </div>
            <div class='card-body'>
                <h5 class='card-title'><?php echo 'Nombre de Tarea' ?>
</h5>
<p class='card-text'>La tarea es crear la cura para el covid-19</p>
<!--El link lo va a llevar a esa tarea-->
<a class='btn btn-primary'>Ir a la tarea</a>
<div class='card-footer text-muted'>
    <?php $num = rand(1, 10);
    echo 'Quedan $num dias para revisar' ?>
</div>
</div>
</div>

<div class='card my-2 text-left mx-2'>
    <div class='card-header'> Materia
    </div>
    <div class='card-body'>
        <h5 class='card-title'><?php echo 'Nombre de Tarea' ?></h5>
        <p class='card-text'>La tarea es crear la cura para el covid-19</p>
        <!--El link lo va a llevar a esa tarea-->
        <a class='btn btn-primary'>Ir a la tarea</a>
        <div class='card-footer text-muted'>
            <?php $num = rand(1, 10);
            echo 'Quedan $num dias para revisar' ?>
        </div>
    </div>
</div>

<h4 id='list-item-2'>Grupo 2</h4>
<p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non
    elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in
    duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis
    ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore
    officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur
    ipsum commodo tempor sunt in proident.</p>
<h4 id='list-item-3'>Grupo 3</h4>
<p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum
    fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor
    mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
<h4 id='list-item-4'>Grupo 4</h4>
<p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum
    fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor
    mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
</div>
</div>
</div>"