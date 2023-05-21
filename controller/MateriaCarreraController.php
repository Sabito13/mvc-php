<?php
require_once 'model/MateriaCarreraModel.php';

class MateriaCarreraController{
  public $materiaCarreraModel;

  public function __construct(){
    $this->materiaCarreraModel = new MateriaCarreraModel();
  }

  public function  agregarMateriaCarrera($id_materia,$nombre_materia, $correlativas) {
    $this->materiaCarreraModel->agregarMateriaCarrera($id_materia,$nombre_materia, $correlativas);
  }

  public function  materiaExistePorSuId($id_materia) {
    $materia_existe = $this->materiaCarreraModel->materiaExistePorSuId($id_materia);
    $tupla = mysqli_fetch_assoc($materia_existe);
    return (isset($tupla) and !empty($tupla)); 
  }
  
}

?>