<?php

include('Db.php');

class Materia {
    private $id;
    private $nombre;
    private $correletivas;
    private $anio;
    private $cuatrimestre;
    private $conexion_db;


    public function __construct() {
        $dbObj = new Db();
		$this->conexion_db = $dbObj->conexion_db;
    }
    
    public function funcionTestInsert() {
        $query = "INSERT INTO materias(id_materia, nom_materia,correlativas) VALUES (01015,'new', 'no')";
        $result = mysqli_query($this->conexion_db, $query);
        if(!$result) {
            die("Query Failed.");
            }
    }


    public function funcionTestSelect() {
        $query = "SELECT * FROM materias";
        $result_materias = mysqli_query($this->conexion_db, $query); 
        return $result_materias ;
    }



    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
?>