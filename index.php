<?php require_once('includes/header.php');
  echo "<br>";
 
  require_once("controller/MateriaAlumnoController.php");
  $materiaAlumnoController = new MateriaAlumnoController();

  //Si existe Cookie con legajo alumno significa que la sesion esta iniciada
  if(isset($_COOKIE["legajo-alumno"])){
    $sesionIniciada  = true;
  }else{
    $sesionIniciada  = false;
  }


  //Solicitud para iniciar sesion
  if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["iniciar-sesion"])){
    $materiaAlumnoController->iniciarSesionAlumno($_POST["legajo-alumno"]);
    header('Location: index.php');
  }

  //Solicitud para registrar alumno
  if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["registrar-alumno"])){
    $materiaAlumnoController->registrarAlumno($_POST["legajo-alumno"],$_POST["nombre-alumno"]);
  }


  //Solicitud para cerrar sesion
  if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET["cerrarSesion"])){
    $materiaAlumnoController->cerrarSesion();
    header('Location: index.php');
  }





  if(!$sesionIniciada){
    $materiaAlumnoController->viewIniciarSesionAlumno(!$sesionIniciada);
    $materiaAlumnoController->viewRegistrarAlumno(!$sesionIniciada);
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