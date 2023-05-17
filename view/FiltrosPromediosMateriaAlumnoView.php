<?php require_once './config/config.php';?> 

 <div class="contanainer-filtro-materia">
  <h2>Filtros</h2> 
    <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="GET">
      <div class="filtro-materia-inputs"> 
        <h3>Materia por nota</h3>
        <div>
          <label for="nota-menor">Nota Menor</label>
          <input type="number" name="nota-menor" id="nota-menor">
        </div>

        <div>
          <label for="nota-mayor">Nota Mayor</label>
          <input type="number" name="nota-mayor" id="nota-mayor">
        </div>

        <div>
        <input type="submit" value="Filtrar" name="crud-action"/>
        </div>
      
      </div>    
    </form>

    <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="GET">
    <h3>Promedio del alumno</h3>
        <div>
        <input type="submit" value="Promedio" name="crud-action"/>
        </div>
    </form>
  </div>