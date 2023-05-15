<?php require_once './config/config.php';?> 

<br>
  <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">
    <div style="text-align:center;
              border:2px solid blue;">
        
        <div>
          Legajo alumno
          <br>
          <input type="number" name="legajo-alumno" >
        </div>

        <div>
          Nombre Alumno
          <br>
          <input type="text" name="nombre-alumno"><br>
        </div>

        <input type="submit" value="Iniciar" name="iniciar-sesion" onclick="location='../../index.php'" />
      </form>
    </div>