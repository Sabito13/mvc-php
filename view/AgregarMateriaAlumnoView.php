<?php require_once './config/config.php';?> 

<br>
  <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">
    <div style="display: grid;
              grid-template-columns: repeat(3,minmax(180px,300px));
              grid-template-rows: auto;
              color: bisque;
              gap: 20px;
              border:2px solid blue;">
        <div>
          ID materia
          <br>
          <input type="number" name="id-materia" ><br>
        </div>

        <div>  
          Nota Materia
          <br>
          <input type="number" name="nota-materia" >
        </div>
        <input type="submit" value="Crear" name="crud-action" onclick="location='../../index.php'" />
      </form>
    </div>
    
  
