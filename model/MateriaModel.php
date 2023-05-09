<?php

require_once('Db.php');

class Materia {
    private $id;
    private $nombre;
    private $correletivas;
    private $anio;
    private $cuatrimestre;
    private $dbObj;

    public function __construct() {
        $this->dbObj = new Db();
    }

    

    
    public function funcionTestInsert($nombre,$id) {
		$conexion_db = $this->dbObj->getConexionDB();


        $query = "INSERT INTO materias(id_materia, nom_materia,correlativas) VALUES ('$id','$nombre', 'no')";
        $result =$conexion_db->query($query);
        if(!$result) {
            die("Query Failed.");
            }

        $conexion_db->close();
    }


    public function funcionTestSelect() {
        $conexion_db = $this->dbObj->getConexionDB();

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