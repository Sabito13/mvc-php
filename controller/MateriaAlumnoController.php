<?php
require_once 'model/MateriaAlumnoModel.php';

class MateriaAlumnoController{
    public $materiaAlumnoModel;
	
    public function __construct() {
      $this->materiaAlumnoModel = new MateriaAlumnoModel();
    }


    public function agregarMateriaAlumno($legajo_alumno,$nombre_alumno,$id_materia,$nota_materia){
      //echo "dentro de controller fuera if";
      //if(!empty($legajo_alumno) and !empty($nombre_alumno) and !empty($id_Materia) and !empty($nota_materia)){
        $this->materiaAlumnoModel-> agregarMateriaAlumno($legajo_alumno,$nombre_alumno,$id_materia,$nota_materia);
      //}
       
    }


    public function obtenerTodasMateriasAlumnos(){
      return $this->materiaAlumnoModel->obtenerTodasMateriasAlumnos();
    }


    public function viewListarMateriaAlumno($mostrar){
      $result_materias= $this->obtenerTodasMateriasAlumnos();
          if($mostrar){
            include("./view/MostrarMateriasAlumnoView.php");
          }
      }
      
      public function viewAgregarMateriaAlumno($mostrar){
        if($mostrar){
          include("./view/AgregarMateriaAlumnoView.php");
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