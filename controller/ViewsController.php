<?php

class ViewsController{



    public function viewAgregarMateriaAlumno($mostrar){
      if($mostrar){
        include("./view/insertMateria.php");
      }
      
    }


}