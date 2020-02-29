<!-- ================================================================================== -->
<?php


require "../../../config/conexion.php";

class select_dependientes{

	private $cnx;

	public function __construct(){
		$this ->cnx= conexion::conex();
		echo "imprimir";
	}
	
	public function get_departamento()
	{
		$query = "SELECT * FROM departamento WHERE idpais=?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([1]);
		return $exe->fetchAll();
	}
}

$departamento = new select_dependientes;
//**********************************************************************************************************-->

//MUESTRA UN SELECT CON LOS MUNICIPIOS DEL DEPARTAMENTO ELEGIDO	
?>

<option value="">-- Seleccione un depart --</option>
<?php foreach ($departamento->get_departamento() as $valor) { ?>
	<option value="<?php echo $valor[0] ?>"><?php echo $valor[1] ?></option>
<?php	} ?>


