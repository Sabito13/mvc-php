<?php require_once './config/config.php';?> 

 <div>
      <h1>Eliminar una materia</h1>
      <br>
      <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">

        Id materia
        <input type="number" name="id-materia">
        <br>
        <input type="submit" value="Eliminar" name="crud-action"/>
      </form>
    </div>