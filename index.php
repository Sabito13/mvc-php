<?php require_once('includes/header.php');?> 
  <br>
  <?php
  require_once("controller/MateriaAlumnoController.php");
  $materiaAlumnoController = new MateriaAlumnoController();

  if(isset($_COOKIE["legajo-alumno"])){
    $sesionIniciada  = true;
  }else{
    $sesionIniciada  = false;
  }

  
  $mostrarListar  = true;


  if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["iniciar-sesion"])){
    
    //falta completar metodo
    $materiaAlumnoController->iniciarSesionAlumno($_POST["legajo-alumno"],$_POST["nombre-alumno"]);
    echo "hola";

    $cookie_name ="legajo-alumno";
    $cookie_value = $_POST["legajo-alumno"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $cookie_name = "nombre-alumno";
    $cookie_value = $_POST["nombre-alumno"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    header('Location: index.php');
  }

  if(!$sesionIniciada){
    $materiaAlumnoController->viewIniciarSesionAlumno(!$sesionIniciada);
  }else {
    $materiaAlumnoController->viewAgregarMateriaAlumno(true);
    $materiaAlumnoController->viewListarMateriaAlumno(true);
    $materiaAlumnoController->viewEliminarMateriaAlumno(true);
  }

  
  

 
      
     echo "<br><br>";
   
      
      if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["crud-action"])){
        //echo implode("----",$_POST);
        if($_POST["crud-action"] == "Crear"){
          $materiaAlumnoController->agregarMateriaAlumno($_COOKIE["legajo-alumno"],$_COOKIE["nombre-alumno"],$_POST["id-materia"], $_POST["nota-materia"]);
          header('Location: index.php');
        } 

        if($_POST["crud-action"] == "Eliminar"){
          $materiaAlumnoController->eliminarMateriaAlumno($_COOKIE["legajo-alumno"],$_POST["id-materia"]);
          header('Location: index.php');
        } 
      } 

    //<input type="button" onclick="location='view/insertMateria.php'" />
    //<a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar&listado=".$mostrarListar   ¿>>Listar</a>
    ?>
      
    </body> 
</html>