<?php require_once './config/config.php';?> 

<div class="contanainer-agregar-materia">
<h2>Agregar Materia</h2>
  <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">
    <div class="agregar-materia-inputs">
        
        <div >
        <label for="id-materia">ID materia</label>
        <input  type="number" name="id-materia"  id="id-materia">
        </div>

        <div>  
        <label for="nota-materia">Nota Materia</label>
        <input type="number" name="nota-materia" id="nota-materia" >
        </div>

        <div>
        <input type="submit" value="Agregar" name="crud-action" onclick="location='../../index.php'" />
        </div>
        </div>
  </form>
   
    </div>
    
  
