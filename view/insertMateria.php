<?php require_once './config/config.php';?> 
<a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar"?>>Listar</a>
 
 <div>
      <h1>Insertar una materia</h1>
      <br>
      <form class="form" action=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=funcionTestInsert"?> method="POST">
      <form method="POST" action=>
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
    
  
