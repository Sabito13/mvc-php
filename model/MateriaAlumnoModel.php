<?php
require_once('Db.php');

class MateriaAlumnoModel {
    private $nombre_alumno;
    private $legajo_alumno;
    private $dbObj;

    public function __construct() {
        $this->dbObj = new Db();
    }

    public function  agregarMateriaAlumno($legajo_alumno,$nombre_alumno,$id_materia,$nota_materia) {
		$conexion_db = $this->dbObj->getConexionDB();


        $query = "INSERT INTO materia_alumno(legajo_alumno,nombre_alumno,id_materia,nota_materia) VALUES ('$legajo_alumno','$nombre_alumno','$id_materia', '$nota_materia')";
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

        echo $conexion_db->close();

        return $result_materias ;
    }



    public function setLegajo_alumno($id_alumno) {
        $this->legajo_alumno = $id_alumno;
    }

    public function setNombre_alumno($nombre_alumno) {
        $this->$nombre_alumno = $nombre_alumno;
    }

    public function getLegajo_alumno() {
        return $this->legajo_alumno;
    }

    public function getNombre_alumno() {
        return $this->nombre_alumno;
    }
    
    

    

}
?>