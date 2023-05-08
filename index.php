<?php include('information.php'); ?>



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
  <div class="div-test-css"><?php echo implode("----", $materias[01017]); ?></div>
  <br>
  <div class="div-test-javascript"  onclick="doSomething()"><?php echo implode("----", $materias[01019]); ?></div>
 
  <br>

  
  <?php include('view/presentacion.php')?>

<button onclick="redirgirToPresentacion()">presentacion</button>
</body>
</html>