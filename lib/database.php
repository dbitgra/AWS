<?php
	/**
	 * Daniel Bittan Graells
	 * Conexion a la base de datos
	 */
	
	class Database{
		private static $instancia=null;
		private $con;
		private $resultado;

		private function __clone(){}

		public function __construct(){
			try {
                $this->con = new mysqli("localhost", "root", "", "login");
            } catch (mysqli_sql_exception $e) {
                die("Error de conexión con el motor de Bases de Datos.");
            }		
		}

		public function query(String $sql){
  		 	$this->resultado=$this->con->query($sql);
        return $this;
  		}
  		
  		public function getData($user="stdClass"){
  		 	return $this->resultado->fetch_object($user);
  		}

  		public function getAll($clase = "StdClass") {

  			$salida = [] ;

  			while($item = $this->getData($clase))
  				$salida[] = $item ;
  			return $salida ;
  		}
  		public function getDatabase(){
           if(self::$instancia == null) self::$instancia = new Database;
           return self::$instancia;
       }
	}
	