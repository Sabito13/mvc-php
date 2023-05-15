<?php require_once './config/config.php';?> 

 <div>
      <h1>Agregar una materia</h1>
      <br>
      <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">
        Nombre Alumno
        <br>
        <input type="text" name="nombre-alumno"><br>
        legajo alumno
        <br>
        <input type="number" name="legajo-alumno" >
        <br>
  
        Nombre materia
        <br>
        <input type="text" name="nombre-materia" ><br>
        nota Materia
        <br>
        <input type="number" name="nota-materia" >
        <br>
        <input type="submit" value="Crear" name="crud-action" onclick="location='../../index.php'" />
      </form>
    </div>
    
  
