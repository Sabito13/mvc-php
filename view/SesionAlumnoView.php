<?php require_once './config/config.php';?> 

<br>

  <form class="form" action=<?php echo constant('BASE_URL')."/request.php"?> method="POST">
    <div style="text-align:center;
              border:2px solid blue;">
        <h1>Iniciar sesion Alumno</h1>
        <div>
          Legajo alumno
          <br>
          <input type="number" name="legajo-alumno" >
        </div>


        <input type="submit" value="Iniciar" name="iniciar-sesion" onclick="location='../../index.php'" />
      </form>
    </div>