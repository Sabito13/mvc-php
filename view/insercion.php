<!DOCTYPE html>
<html lang="es">
<head>
  <title>Insertar</title>
</head>
<body>
  <?php
  if (!$_POST) {
  ?>
    <div>
      <h1>Insertar un registro</h1>
      <br>
      <form method="POST" action="index.php">
        Nombre
        <br>
        <input type="text" name="nombre"><br>
        Teléfono
        <br>
        <input type="text" name="telefono">
        <br>
        <input type="submit" value="Insertar" onsubmit="event.preventDefault()">
      </form>
    </div>
    
  <?php
  } else {


    // Recuperamos los datos del formulario
    echo $nombre = $_POST["nombre"];
    echo $telefono = $_POST["telefono"];

    // Componemos la sentencia SQL
    //$ssql = "insert into clientes (nombre, telefono) values ('$nombre','$telefono')";

    // Ejecutamos la sentencia y comprobamos si ha ido bien
    //if($conexion->query($ssql)) {
    //  echo "<p>Registro insertado con éxito</p>";
    //} else {
    //  echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->error}</p>";
    //}
    //$conexion->close();
  ?>
  <p><a href="index.php">Volver al formulario</a></p>
  <?php
  }
  ?>

  <form action="index.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar" >
</form>
Hola <?php isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; ?><br>
Tu email es: <?php isset($_GET["email"]) ? print $_GET["email"] : ""; ?>
</body>
</html>