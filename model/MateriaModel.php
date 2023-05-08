<?php

include('Db.php');

class Producto {
    private $id;
    private $nombre;
    private $correletivas;
    private $anio;
    private $cuatrimestre;
    
    public function __construct($adapter) {
        
    }
    
    public function funcionTest() {
        $query = "INSERT INTO materias(id_materia, nom_materia,correlativas) VALUES (01015,'new', 'no')";
        $result = mysqli_query($connexion_db, $query);
        if(!$result) {
            die("Query Failed.");
            }
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