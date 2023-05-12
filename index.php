<?php require_once('information.php'); ?>



<?php include('includes/header.php');?>
  <?php echo implode($arrayWithData)." \n"; ?>
  <br>
  <?php echo implode("----",$arrayWithData);?> 
  <br>
  <div class="div-test-css"><?php echo implode("----", $materias[01017]); ?></div>
  <br>
  <div class="div-test-javascript"  onclick="doSomething()"><?php echo implode("----", $materias[01019]); ?></div>
 
  <br>

  <?php
  require_once("controller/MateriasController.php");
  $materiasController = new MateriasController();
  $listado  = true;
  
  $materiasController->viewToInsertMateria();

      if(isset($_POST["nombre-materia"]) and isset( $_POST["id-materia"])){
        $materiasController->funcionTestInsert( $_POST["nombre-materia"], $_POST["id-materia"]);
        header('Location: index.php');
      }

 //require_once ('view/insertMateria.php') ?>
 
      
      <br><br>
      <?php    
      if(isset($_POST["controller"]) and isset( $_POST["action"])and isset($_POST["nombre-materia"]) and isset( $_POST["id-materia"])){
        
        $materiasController->{$_POST["action"]}($_POST["nombre-materia"], $_POST["id-materia"]);
        header('Location: index.php');
      }





    
if(isset($_GET["controller"]) and isset( $_GET["action"]) and $_GET["action"]=="listar" and isset( $_GET["listado"]) ){
    if($_GET["listado"]){
      $materiasController->funcionTestView(true);
      $listado =false;
    }else{
      $listado=true;
    }
    }?>
      
      <input type="button" onclick="location='view/insertMateria.php'" />
      <a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar&listado=".$listado?>>Listar</a>
    </body> 
</html>