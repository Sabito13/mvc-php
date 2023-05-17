<?php 

require_once './config/config.php';

class Db {

	private $host;
	private $db;
	private $user;
	private $pass;


	public function __construct() {		

		$this->host = constant('DB_HOST');
		$this->db = constant('DB');
		$this->user = constant('DB_USER');
		$this->pass = constant('DB_PASS');
	}
	
	public function getConexionDB() {
			
			$conexion_db =new mysqli(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
			);
		   if($conexion_db->connect_errno) {
			echo "Error de conexión con la base de datos: " . $conexion_db->connect_errno;	
			exit;
			 }
			return $conexion_db;
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
