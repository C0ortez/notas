<?php
require "../model/notas_model.php";

class liga{
	private $obj_liga;

	public function __construct(){
		$this->obj_liga = new consultas;
	}
	
	public function index(){
		require "../view/notas.php";
	}

	public function procesar(){



		if (isset($_POST["nota1"])) {
			
		$nota1=$_POST["nota1"];
		$nota2=$_POST["nota2"];
		$nota3=$_POST["nota3"];
		$nota4=$_POST["nota4"];
		$nota5=$_POST["nota5"];

		$total= round(($nota1+$nota2+$nota3+$nota4+$nota5)/5 , 1);



		if ($total <= 3.9) {
			
			$pro = "Su promedio es ". $total. " reprobaste.";
			$img ='../utileria/img/gato.webp';
	
			$resultado = array(
								'pro ' =>  $pro,
								'img' => $img,
								'total'=> $total);
		
			require "../view/notas.php";



		}elseif ($total <= 4.9) {
			$pro = "Su promedio es ". $total. " dsafdasfsd";
		 	$img ='../utileria/img/llorando.webp';
			$resultado = array('pro ' =>  $pro,
								'img' => $img,
								'total'=> $total );
		 	require "../view/notas.php";

		}elseif ($total <= 5.9) {
			$pro = "Su promedio es ". $total. " por poquitooooo";
		 	$img ='../utileria/img/chucho.webp';
			$resultado = array('pro ' =>  $pro,
								'img' => $img,
								'total'=> $total );
		 	require "../view/notas.php";

		}elseif ($total <= 6.9) {
			$pro =  "Su promedio es ".$total. " pasaste la materia";
		 	$img ='../utileria/img/gatofeliz.webp';
			$resultado = array('pro ' =>  $pro,
								'img' => $img,
								'total'=> $total);
		 	require "../view/notas.php";

		}elseif ($total <= 7.9) {
			$pro = "Su promedio es ". $total. " excelente";
		 	$img ='../utileria/img/perrosorprendido.webp';
			$resultado = array('pro ' =>  $pro,
								'img' => $img,
								'total'=> $total );
		 	require "../view/notas.php";

		}else{
			$pro =  "Felicidades su promedio final  es  ".$total;
		 	$img ='../utileria/img/bg1.jpg';
			$resultado = array('pro ' =>  $pro,
								'img' => $img );
		 	require "../view/notas.php";

		}


		}else{
			header("refresh: 0, url=Notas.php");

		}

			
		

		
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