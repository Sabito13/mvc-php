<?php
require_once 'model/MateriaAlumnoModel.php';

class MateriaAlumnoController{
    public $materiaAlumnoModel;
	
    public function __construct() {
      $this->materiaAlumnoModel = new MateriaAlumnoModel();
    }


    public function iniciarSesionAlumno($legajo_alumno,$nombre_alumno){
      
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

    //Obtiene todas las materias de un alumno por su legajo almecenado en la cookie
    public function obtenerTodasMateriasAlumnoPorLegajo(){
      return $this->materiaAlumnoModel->obtenerTodasMateriasAlumnoPorLegajo($_COOKIE["legajo-alumno"]);
    }




    public function eliminarMateriaAlumno($legajo_alumno,$id_materia){
      $this->materiaAlumnoModel->eliminarMateriaAlumno($legajo_alumno,$id_materia);
    }

    public function viewListarMateriaAlumno($mostrar){
      $result_materias= $this->obtenerTodasMateriasAlumnoPorLegajo();
          if($mostrar){
            include("./view/MostrarMateriasAlumnoView.php");
          }
      }
      
      public function viewAgregarMateriaAlumno($mostrar){
        if($mostrar){
          include("./view/AgregarMateriaAlumnoView.php");
        }
        
      }


      public function viewEliminarMateriaAlumno($mostrar){
        if($mostrar){
          include("./view/EliminarMateriaAlumnoView.php");
        }
        
      }

      public function viewIniciarSesionAlumno($mostrar){
        if($mostrar){
          include("./view/SesionAlumnoView.php");
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