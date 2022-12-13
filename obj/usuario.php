<?php 
	require_once "lib/database.php";
	/**
	 * Daniel Bittan Graells
	 * 2ºDAWES
	 */

	class Usuario{

		private $id;
		private $usuario;
		private $pass;
	/**
	 * @return String
	 */

	/**
	* @return int
	*/
	public function getIdUsu(): int{
		return $this->id;
	}

  public function __construct()
  {
  }

  //Sleep y wakeUp para serializar y deserializar. Repasar.
  public function __sleep() {
    return ["id","usuario"];
  }

  //Se invoca automáticamente cuando se hace una deserialización.
  public function __wakeup() {

  }

  public function __get($key) {
    return $this->$key;
  }

  public function __set($prop, $value) {
    $this->$prop = $value;
  }

  public function getUsuarios(){
  	$db=Database::getDatabase();
    $sql="SELECT * FROM usuario";
    $db->query($sql);
    $db->getAll("Usuario");
  }

  public function updatePWD() {
    $db=Database::getDatabase();
    $sql="UPDATE usuario SET pass='{$this->pass}' WHERE id='{$this->id}';";
    $db->query($sql);
  }

  public function registrar() {
    $db=Database::getDatabase();
    $sql="INSERT INTO usuario VALUES('{$this->usuario}',null,'{$this->pass}');";
    $db->query($sql);
  }
}
 ?>