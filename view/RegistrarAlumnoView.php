<?php require_once './config/config.php';?> 

<br>

  <form class="form" action=<?php echo constant('BASE_URL')."/index.php"?> method="POST">
    <div style="text-align:center;
              border:2px solid blue;">
        <h1>Registrar Alumno</h1>
        <div>
          Legajo alumno
          <br>
          <input type="number" name="legajo-alumno" >
        </div>

        <div>
          Nombre alumno
          <br>
          <input type="text" name="nombre-alumno"><br>
        </div>

        <input type="submit" value="Registrar" name="registrar-alumno" onclick="location='../../index.php'" />
      </form>
    </div>