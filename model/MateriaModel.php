<?php

include('Db.php');

class Materia {
    private $id;
    private $nombre;
    private $correletivas;
    private $anio;
    private $cuatrimestre;


    public function __construct() {
       
    }

    public function getConexionDB() {
        $dbObj = new Db();
        return $dbObj->conexion_db;
    }

    
    public function funcionTestInsert() {
		$conexion_db = $this->getConexionDB();


        $query = "INSERT INTO materias(id_materia, nom_materia,correlativas) VALUES (01015,'new', 'no')";
        $result =$conexion_db->query($query);
        if(!$result) {
            die("Query Failed.");
            }

        $conexion_db->close();
    }


    public function funcionTestSelect() {
        $conexion_db = $this->getConexionDB();

        $query = "SELECT * FROM materias";
        $result_materias = $conexion_db->query($query); 

        echo "se cierra o no";
        echo $conexion_db->close();

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