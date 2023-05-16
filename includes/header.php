<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP CRUD MYSQL</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./app.js" defer></script>
  </head>
  <body>
    <nav>
      <div class="menu-div">
          <div><a href="index.php" >Materias MVC CRUD</a></div>
          
          <?php 
              if(isset($_COOKIE["nombre-alumno"])  ) {?>
          <div>
           <?php 
              echo $_COOKIE["nombre-alumno"];
            ?>
          </div>
              
          <div>
          <?php echo $_COOKIE["legajo-alumno"] ?>
          </div>

          <?php echo "<div><a href='index.php?cerrarSesion=true'
          >cerrar sesion </a></div>" ;
          }?>
      
        </div>
    </nav>