<?php
require "../config/conexion.php";
class consultas{

	private $cnx;

	public function __construct(){
		$this->cnx = conexion::conex();
	}
}



?>