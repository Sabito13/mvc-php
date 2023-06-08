<?php require_once './config/config.php';?> 

<div class="register-layout">

  <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
    <div style="text-align:center;">
        <h1>Registrar Alumno</h1>
        <div>
          <input type="number" name="legajo-alumno"  placeholder="Legajo Alumno">
        </div>

        <div>
          <input type="text" name="nombre-alumno" placeholder="Nombre Alumno">
        </div>


        <div>
          <input type="number" name="id-carrera" placeholder="Id Carrera">
        </div>

        <input type="submit" value="Registrar" name="registrar-alumno" onclick="location='../../index.php'" />
      </div>
      </form>
    </div>
