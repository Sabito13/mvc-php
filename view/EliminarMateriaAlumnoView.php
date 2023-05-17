<?php require_once './config/config.php';?> 

 <div class="contanainer-eliminar-materia">
  <h2>Eliminar Materia</h2> 
    <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
      <div class="eliminar-materia-inputs"> 
        <div>
          <label for="id-materia">ID materia</label>
          <input type="number" name="id-materia" id="id-materia">
        </div>

        <div>
        <input type="submit" value="Eliminar" name="crud-action"/>
        </div>
      
      </div>    
    </form>
  </div>