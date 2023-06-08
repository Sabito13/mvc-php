<?php require_once './config/config.php';?> 

<div class="sesion-layout">

  <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
    <div>
        <h1>Iniciar sesion Alumno</h1>
        <div>
          <input type="number" name="legajo-alumno"  placeholder="Legajo Alumno">
        </div>
    </div>

        <input type="submit" value="Iniciar" name="iniciar-sesion" onclick="location='../../index.php'" />
      </form>
    </div>
