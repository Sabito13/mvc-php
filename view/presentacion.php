<?php include('information.php'); ?>
<?php include('db_conexion.php'); ?>


<?php include('includes/header.php')?>
<?php  
  $query = "SELECT * FROM materias";
  $result_materias = mysqli_query($connexion_db, $query);    
  while($row = mysqli_fetch_assoc($result_materias)) { ?>
          <tr>
            <td><?php echo $row['id_materia']; ?></td>
            <td><?php echo $row['nom_materia']; ?></td>
            <td><?php echo $row['correlativas']; ?></td>
            </tr>
<?php } ?>
</body>
</html>