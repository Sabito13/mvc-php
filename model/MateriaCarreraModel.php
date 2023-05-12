<?php

require_once('Db.php');

class Materia {
    private $id;
    private $nombreMateria;
    private $correlativas;
    private $anio;
    private $cuatrimestre;
    private $dbObj;

    public function __construct() {
        $this->dbObj = new Db();
    }
  
  
  }

?>