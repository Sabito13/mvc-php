<?php
require_once 'model/MateriaAlumnoModel.php';

class MateriaAlumnoController{
    public $materiaAlumnoModel;
	
    public function __construct() {
      $this->materiaAlumnoModel = new MateriaAlumnoModel();
    }

    public function insertarDatosAlumno($nombre_alumno,$legajo_alumno){
      $this->materiaAlumnoModel->setNombre_Alumno($nombre_alumno);
      $this->materiaAlumnoModel->setLegajo_Alumno($legajo_alumno);
    }

    public function insertarMateriaAlumno($idMateria,$nota_materia){
      return $this->materiaAlumnoModel->insertarMateriaAlumno($idMateria,$nota_materia);
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