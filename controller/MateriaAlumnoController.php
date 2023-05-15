<?php
require_once 'model/MateriaAlumnoModel.php';

class MateriaAlumnoController{
    public $materiaAlumnoModel;
	
    public function __construct() {
      $this->materiaAlumnoModel = new MateriaAlumnoModel();
    }


    public function insertarMateriaAlumno($legajo_alumno,$nombre_alumno,$idMateria,$nota_materia){
      if(isset($legajo_alumno) and isset($nombre_alumno) and isset($idMateria) and isset($nota_materia)){
        $this->materiaAlumnoModel->insertarMateriaAlumno($legajo_alumno,$nombre_alumno,$idMateria,$nota_materia);
      }
       
    }


    public function obtenerTodasMateriasAlumnos(){
      return $this->materiaAlumnoModel->obtenerTodasMateriasAlumnos();
    }


    public function viewListarMateriaAlumno($mostrar){
      $result_materias= $this->obtenerTodasMateriasAlumnos();
          if($mostrar){
            include("./view/getMateria.php");
          }
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