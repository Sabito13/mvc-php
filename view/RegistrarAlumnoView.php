<?php require_once './config/config.php';?> 

<div class="register-layout">

  <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
    <div style="text-align:center;">
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


        <div>
          Id carrera
          <br>
          <input type="number" name="id-carrera"><br>
        </div>

        <input type="submit" value="Registrar" name="registrar-alumno" onclick="location='../../index.php'" />
      </div>
      </form>
    </div>
