<?php 

require_once 'config/config.php';

class Db {

	private $host;
	private $db;
	private $user;
	private $pass;
	public $conexion_db;

	public function __construct() {		

		$this->host = constant('DB_HOST');
		$this->db = constant('DB');
		$this->user = constant('DB_USER');
		$this->pass = constant('DB_PASS');

		session_start();

			$this->conexion_db = mysqli_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
		) or die(mysqli_error($this->conexion_db));
		
	}

}



/*session_start();

$connexion_db = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_materias_crud'
) or die(mysqli_error($mysqli));
*/
?>
