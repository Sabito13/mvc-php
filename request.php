<?php require_once('includes/header.php');

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


//Todas las solicitudes para crud son manejadas dentro de este if
if (isset($_POST["crud-action"]) or isset($_GET["crud-action"])) {
  $materiaAlumnoController->crudFuncionMateriaAlumno();
}

header('Location: index.php');
?>