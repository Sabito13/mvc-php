<?php
require_once 'model/MateriaModel.php';

class MateriasController{
    public $materia;
	
    public function __construct() {
      $this->materia = new Materia();
    }

    public function funcionTestRecursiva(){
      return $this->materia->funcionTestSelect();
    }

    public function funcionTestInsert($nombre,$id){
      return $this->materia->funcionTestInsert($nombre,$id);
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