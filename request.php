<?php session_start(); 
require_once("controller/MateriaAlumnoController.php");
require_once("controller/AlumnoController.php");

$materiaAlumnoController = new MateriaAlumnoController();
$alumnoController = new AlumnoController();

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["iniciar-sesion"])) {
  $alumnoController->iniciarSesionAlumno($_POST["legajo-alumno"]);
}

//Solicitud para registrar alumno
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["registrar-alumno"])) {
  $alumnoController->registrarAlumno($_POST["legajo-alumno"], $_POST["nombre-alumno"],$_POST["id-carrera"]);
}


//Solicitud para cerrar sesion
if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET["cerrarSesion"])) {
  $alumnoController->cerrarSesion();
}


//Todas las solicitudes para crud POST son manejadas dentro de este if
if (isset($_POST["crud-action"])) {
  $materiaAlumnoController->crudFuncionMateriaAlumnoPost();
}

//Todas las solicitudes para crud Get son manejadas dentro de este if
if (isset($_GET["crud-action"])) {
  $materiaAlumnoController->crudFuncionMateriaAlumnoGet();
}

header('Location: index.php');
?>