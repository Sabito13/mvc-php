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

			$this->conexion_db =new mysqli(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
			);
		   if($this->conexion_db->connect_errno) {
			echo "Error de conexión con la base de datos: " . $this->conexion_db->connect_errno;	
			exit;
	}
	
		
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
