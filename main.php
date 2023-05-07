<?php include('information.php'); ?>
<?php include('db_conexion.php'); ?>


<?php include('includes/header.php')?>
  <div>hello world from div 1</div>
  <?php echo "hello from php"?>
  <div>hello world from div 2</div>
  <?php $newHello = "hello from variable"?>
  <div>hello world from div 3</div>
  <?php echo $newHello?>
  <br>
  <?php echo $arrayWithData[2];?>
  <br>
  <?php echo implode($arrayWithData)." \n"; ?>
  <br>
  <?php echo implode("----",$arrayWithData);?> 
  <br>
  <?php echo implode("----", $materias[01017]); ?>
  <br>
  <?php echo implode("----", $materias[01019]); ?>
  <br>
  <?php
  $query = "INSERT INTO materias(id_materia, nom_materia,correlativas) VALUES (01015,'algebra', 'no')";
  $result = mysqli_query($connexion_db, $query);
  if(!$result) {
    die("Query Failed.");
  }
  
  

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