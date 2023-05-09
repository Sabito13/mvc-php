<?php  

error_reporting(E_ALL);
ini_set('display_errors', '1');



include("./controller/MateriasController.php");

$MateriasController = new MateriasController();

$result_materias= $MateriasController->funcionTestRecursiva();

  while($row = mysqli_fetch_assoc($result_materias)) { ?>
          <tr>
            <td><?php echo $row['id_materia']; ?></td>
            <td><?php echo $row['nom_materia']; ?></td>
            <td><?php echo $row['correlativas']; ?></td>
            </tr><br>
<?php } ?>
</body>
</html>