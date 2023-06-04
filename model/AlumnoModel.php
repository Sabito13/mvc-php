<?php
require_once('Db.php');

class AlumnoModel {
    private $dbObj;

    public function __construct() {
        $this->dbObj = new Db();
    }

    public function alumnoExistePorLegajo($legajo_alumno){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM alumno WHERE legajo_alumno = $legajo_alumno  LIMIT 0,1";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
    }




    public function  agregarAlumno($legajo_alumno,$nombre_alumno,$id_carrera) {
		$conexion_db = $this->dbObj->getConexionDB();


        $query = "INSERT INTO alumno(legajo_alumno,nombre_alumno,id_carrera) VALUES ('$legajo_alumno','$nombre_alumno','$id_carrera')";
        $result =$conexion_db->query($query);
        if(!$result) {
            die("Query Failed.");
            }

        $conexion_db->close();
    }

}
?>