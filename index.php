<?php require_once('includes/header.php');

//renderizados de views
if (!isset($_SESSION["legajo-alumno"])) {
?>
<div class="layout-login-container">
  <?php
  $materiaAlumnoController->viewIniciarSesionAlumno(true);
  $materiaAlumnoController->viewRegistrarAlumno(true);
  ?>
</div>  
<?php
} else {
  ?>
  <div class="layout-container">
    <div class="layout-left-menu"> <?php 
    $materiaAlumnoController->viewAgregarMateriaAlumno(true);
    $materiaAlumnoController->viewEliminarMateriaAlumno(true)
    ?></div>
    <div class="layout-main-content"><?php $materiaAlumnoController->viewMostrarMateriaAlumno();?></div>
    <div class="layout-right-menu"><?php $materiaAlumnoController->viewFiltrosPromediosMateriaAlumno(true); ?> </div>
  </div>
  
<?php }

//Solicitud para iniciar sesion

//<input type="button" onclick="location='view/insertMateria.php'" />
//<a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar&listado=".$mostrarListar   ¿>>Listar</a>
?>

<?php require_once('includes/footer.php');
