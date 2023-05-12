<?php require_once './config/config.php';?> 

 <div>
      <h1>Agregar una materia</h1>
      <br>
      <form class="form" action=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=insertarMateriaAlumno"?> method="POST">
        Nombre Alumno
        <br>
        <input type="text" name="nombre-alumno"><br>
        legajo alumno
        <br>
        <input type="number" name="legajo-alumno">
        <br>
  
        id materia
        <br>
        <input type="number" name="nombre-materia"><br>
        id Materia
        <br>
        <input type="number" name="id-materia">
        <br>
        <input type="submit" value="Insertar" onclick="location='../../index.php'" />
      </form>
    </div>
    
  
