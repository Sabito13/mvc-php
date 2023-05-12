<?php require_once './config/config.php';?> 

 <div>
      <h1>Eliminar una materia</h1>
      <br>
      <form class="form" action=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=funcionTestInsert"?> method="POST">
        id Materia
        <br>
        <input type="text" name="id-materia">
        <br>
        <input type="submit" value="Insertar" onclick="location='../../index.php'" />
      </form>
    </div>