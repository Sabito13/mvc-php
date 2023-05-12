<?php  


  while($row = mysqli_fetch_assoc($result_materias)) { ?>
          <tr>
          <td>id alumno<?php echo $row['legajo_alumno']; ?></td>
          <td>nombe alumno<?php echo $row['nombre_alumno']; ?></td>
            <td>id materia<?php echo $row['id_materia']; ?></td>
            <td>nota<?php echo $row['nota_materia']; ?></td>
            </tr><br>
<?php } ?>

<!--
<form action="index.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    id: <input type="text" name="id"><br>
    <input type="submit" value="Enviar" >
</form>
//isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; 
//isset($_GET["email"]) ? print $_GET["email"] : ""; 
  -->
</body>
</html>