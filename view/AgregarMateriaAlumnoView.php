<?php require_once './config/config.php';?> 

<div class="contanainer-agregar-materia">
<h2>Agregar Materia</h2>
  <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
    <div class="agregar-materia-inputs">
        
        <!--<div >
        <label for="id-materia">ID materia</label>
        <input  type="number" name="id-materia"  id="id-materia">
        </div>-->
        <div >
          <label for="id-materia">Elegir Materia</label>
          <select name="id-materia" id="id-materia">
          <option value="">--Seleccionar--</option>
          <?php  while($row = mysqli_fetch_assoc($materias_resultado)) { ?>
          <option value=<?php echo $row['id_materia']; ?>><?php echo $row['nombre_materia']; ?></option>
          <?php } ?>
          </select>
        </div>
        
        <div>  
        <label for="nota-materia">Nota Materia</label>
        <input type="number" name="nota-materia" id="nota-materia" min="1" max="10">
        </div>

        <div>
        <input type="submit" value="Agregar" name="crud-action"/>
        </div>
        </div>
  </form>
   
    </div>
    
  
