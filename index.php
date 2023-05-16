<?php require_once('includes/header.php');


require_once("controller/MateriaAlumnoController.php");
$materiaAlumnoController = new MateriaAlumnoController();


//renderizados de views
if (!isset($_COOKIE["legajo-alumno"])) {
  $materiaAlumnoController->viewIniciarSesionAlumno(true);
  $materiaAlumnoController->viewRegistrarAlumno(true);
} else {
  ?>
  <div class="layout-container">
    <div class="layout-left-menu"> <?php 
    $materiaAlumnoController->viewAgregarMateriaAlumno(true);
    
    ?></div>
    <div class="layout-main-content"><?php $materiaAlumnoController->viewListarMateriaAlumno(true);?></div>
    <div class="layout-right-menu"><?php $materiaAlumnoController->viewEliminarMateriaAlumno(true); ?> </div>
  </div>
  
  
  

<?php }



//Solicitud para iniciar sesion
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["iniciar-sesion"])) {
  $materiaAlumnoController->iniciarSesionAlumno($_POST["legajo-alumno"]);
  header('Location: index.php');
}

//Solicitud para registrar alumno
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["registrar-alumno"])) {
  $materiaAlumnoController->registrarAlumno($_POST["legajo-alumno"], $_POST["nombre-alumno"]);
}


//Solicitud para cerrar sesion
if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET["cerrarSesion"])) {
  $materiaAlumnoController->cerrarSesion();
  header('Location: index.php');
}


//Todas las solicitudes para crud son manejadas dentro de este if
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["crud-action"])) {
  

  if ($_POST["crud-action"] == "Agregar") {
    $materiaAlumnoController->agregarMateriaAlumno($_COOKIE["legajo-alumno"], $_COOKIE["nombre-alumno"], $_POST["id-materia"], $_POST["nota-materia"]);
    header('Location: index.php');
  }

  if ($_POST["crud-action"] == "Eliminar") {
    $materiaAlumnoController->eliminarMateriaAlumno($_COOKIE["legajo-alumno"], $_POST["id-materia"]);
    header('Location: index.php');
  }
}

//<input type="button" onclick="location='view/insertMateria.php'" />
//<a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar&listado=".$mostrarListar   ¿>>Listar</a>
?>

<?php require_once('includes/footer.php');