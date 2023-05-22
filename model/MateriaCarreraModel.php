<?php

require_once('Db.php');

class MateriaCarreraModel {
  private $dbObj;

  public function __construct() {
    $this->dbObj = new Db();
  }
  
  public function  agregarMateriaCarrera($id_materia,$nombre_materia, $correlativas) {
		$conexion_db = $this->dbObj->getConexionDB();


        $query = "INSERT INTO materia_carrera(id_materia,nombre_materia, correlativas) VALUES ('$id_materia', '$nombre_materia','$correlativas')";
        $result =$conexion_db->query($query);
        if(!$result) {
            die("Query Failed.");
            }

        $conexion_db->close();
    }

    public function  obtenerMateriaPorId($id_materia) {
      $conexion_db = $this->dbObj->getConexionDB();

      $query = "SELECT * FROM materia_carrera WHERE id_materia = '$id_materia'  LIMIT 0,1";
      $result_materias = $conexion_db->query($query); 

      $conexion_db->close();

      return $result_materias ;
      }

      public function obtenerTodasMaterias(){
        $conexion_db = $this->dbObj->getConexionDB();

        $query = "SELECT * FROM materia_carrera";
        $result_materias = $conexion_db->query($query); 

        $conexion_db->close();

        return $result_materias ;
      }

  }


?>