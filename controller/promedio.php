<?php
require "../model/notas_model.php";

class liga{
	private $obj_notas;

	public function __construct(){
		$this->obj_notas = new consultas;
	}
	
	public function index(){
		require "../view/pronto.php";
	}



}

$obj_local = new liga;

if(isset($_REQUEST["action"])){
	$action = $_REQUEST["action"];
	$obj_local->$action();
}else{
	$obj_local->index();
	
}


?>