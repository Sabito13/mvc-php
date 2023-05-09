<?php require_once '../config/config.php';?> 
 
 
 <div>
      <h1>Insertar una materia</h1>
      <br>
      <form method="POST" action=<?php echo constant('BASE_URL')."/index.php"?>>
        Nombre materia
        <br>
        <input type="text" name="nombre-materia"><br>
        id Materia
        <br>
        <input type="text" name="id-materia">
        <br>
        <input type="submit" value="Insertar" onclick="location='../../index.php'" />
      </form>
    </div>
    
  
