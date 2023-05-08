<?php
class MateriasController{
    public $materia;
	
    public function __construct() {
      $materia = new MateriaModel();
    }

    public function funcionTestRecursiva(){
      $materia.funcionTest()
    }
   
    public function verMateriaPorId(){
    }

    public function verTodasMaterias(){
    }

    public function crearMateria(){
    }

    public function modificarMateria(){
    }
    
    public function borrarMateria(){
    }
  
}
?>