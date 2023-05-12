<?php require_once('information.php'); ?>



<?php require_once('includes/header.php');?>
  <?php echo implode($arrayWithData)." \n"; ?>
  <br>
  <?php echo implode("----",$arrayWithData);?> 
  <br>
  <div class="div-test-css"><?php echo implode("----", $materias[01017]); ?></div>
  <br>
  <div class="div-test-javascript"  onclick="doSomething()"><?php echo implode("----", $materias[01019]); ?></div>
 
  <br>

  <?php
  require_once("controller/MateriaAlumnoController.php");
  require_once("controller/ViewsController.php");
  $viewsController = new ViewsController();
  $materiaAlumnoController = new MateriaAlumnoController();
  
  //$materiaAlumnoController->insertarDatosAlumno("pablo", 14);
  //$materiaAlumnoController->insertarMateriaAlumno(14, 7);


  $mostrarAgregar  = true;
  $mostrarListar  = true;
  
  $viewsController->viewAgregarMateriaAlumno($mostrarAgregar);
  $materiaAlumnoController->viewListarMateriaAlumno($mostrarListar);

     // if(isset($_POST["nombre-materia"]) and isset( $_POST["id-materia"])){
     //   $materiasController->funcionTestInsert( $_POST["nombre-materia"], $_POST["id-materia"]);
     //   header('Location: index.php');
     // }

 //require_once ('view/insertMateria.php') ?>
 
      
      <br><br>
      <?php    
      if(isset($_POST["controller"]) and isset( $_POST["action"])){
        echo "holi";
        
        $materiaAlumnoController->insertarDatosAlumno($_POST["nombre-alumno"], $_POST["legajo-alumno"]);
        $materiaAlumnoController->{$_POST["action"]}($_POST["nombre-materia"], $_POST["id-materia"]);
        echo "holi";
        header('Location: index.php');
      }





    
//if(isset($_GET["controller"]) and isset( $_GET["action"]) and $_GET["action"]=="listar" and isset( $_GET["listado"]) ){
//    if($_GET["listado"]){
//      $materiaAlumnoController->funcionTestView(true);
//      $mostrarListar =false;
//    }else{
//      $mostrarListar=true;
//    }
//    }?>
      
      <input type="button" onclick="location='view/insertMateria.php'" />
      <a href=<?php echo constant('BASE_URL')."/index.php?controller=materia&action=listar&listado=".$mostrarListar?>>Listar</a>
    </body> 
</html>