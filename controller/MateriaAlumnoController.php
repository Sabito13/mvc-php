<?php
require_once 'model/MateriaAlumnoModel.php';

class MateriaAlumnoController{
    public $materiaAlumnoModel;
	
    public function __construct() {
      $this->materiaAlumnoModel = new MateriaAlumnoModel();
    }


    public function iniciarSesionAlumno($legajo_alumno){
    $alumnoExiste=  $this->materiaAlumnoModel->alumnoExistePorLegajo($legajo_alumno);    
    $tupla = mysqli_fetch_assoc($alumnoExiste);

    if(isset($tupla) and !empty($tupla)){
      $cookie_name ="legajo-alumno";
      $cookie_value = $legajo_alumno;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

      $cookie_name = "nombre-alumno";
      $cookie_value = $tupla["nombre_alumno"];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      }else{
        echo "Legajo incorrecto";
      }
    }


    public function RegistrarAlumno($legajo_alumno,$nombre_alumno){
      $alumnoExiste=  $this->materiaAlumnoModel->alumnoExistePorLegajo($legajo_alumno);    
      $tupla = mysqli_fetch_assoc($alumnoExiste);

      if(isset($tupla) and !empty($tupla)){
        echo "Este legajo ya esta registrado";
      }else{
        $this->materiaAlumnoModel-> agregarMateriaAlumno($legajo_alumno,$nombre_alumno,0,0);
        echo "Registro Exitoso";
      }
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

      public function viewRegistrarAlumno($mostrar){
        if($mostrar){
          include("./view/RegistrarAlumnoView.php");
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