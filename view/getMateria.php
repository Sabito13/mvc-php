<?php  
$result_materias= $materiasController->funcionTestRecursiva();

  while($row = mysqli_fetch_assoc($result_materias)) { ?>
          <tr>
            <td><?php echo $row['id_materia']; ?></td>
            <td><?php echo $row['nom_materia']; ?></td>
            <td><?php echo $row['correlativas']; ?></td>
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