<?php

class conexion{

	public function conex(){

		  $pdo = new PDO("mysql:host=localhost;dbname=;charset=utf8","root","");

		  return $pdo;
	}

}
