<?php
require_once('Db.php');

class MateriaAlumnoModel {
    private $dbObj;

    public function __construct() {
        $this->dbObj = new Db();
    }

    public function alumnoExistePorLegajo($legajo_alumno){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM materia_alumno WHERE legajo_alumno = $legajo_alumno  LIMIT 0,1";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
    }




    public function  agregarMateriaAlumno($legajo_alumno,$id_materia,$nota_materia) {
		$conexion_db = $this->dbObj->getConexionDB();


        $query = "INSERT INTO materia_alumno(legajo_alumno,id_materia,nota_materia) VALUES ('$legajo_alumno','$id_materia', '$nota_materia')";
        $result =$conexion_db->query($query);
        if(!$result) {
            die("Query Failed.");
            }

        $conexion_db->close();
    }


    public function obtenerTodasMateriasAlumnos() {
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM materia_alumno";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
    }

    public function obtenerTodasMateriasAlumnoPorLegajo($legajo_alumno){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM materia_alumno WHERE legajo_alumno = '$legajo_alumno' ";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
    }


    public function obtenerTodasMateriasAlumnoPorNota($legajo_alumno,$nota_baja,$nota_alta){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM materia_alumno WHERE legajo_alumno = '$legajo_alumno' AND nota_materia >= '$nota_baja' AND nota_materia <= '$nota_alta' ";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
    }



    public function eliminarMateriaAlumno($legajo_alumno,$id_materia){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "DELETE FROM materia_alumno WHERE legajo_alumno = '$legajo_alumno' AND id_materia='$id_materia'";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();
    }
}
?>