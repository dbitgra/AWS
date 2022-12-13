<?php 
	
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
}
 ?>