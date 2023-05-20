<?php session_start(); 
require_once("controller/MateriaAlumnoController.php");
$materiaAlumnoController = new MateriaAlumnoController();

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["iniciar-sesion"])) {
  $materiaAlumnoController->iniciarSesionAlumno($_POST["legajo-alumno"]);
}

//Solicitud para registrar alumno
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["registrar-alumno"])) {
  $materiaAlumnoController->registrarAlumno($_POST["legajo-alumno"], $_POST["nombre-alumno"]);
}


//Solicitud para cerrar sesion
if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET["cerrarSesion"])) {
  $materiaAlumnoController->cerrarSesion();
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