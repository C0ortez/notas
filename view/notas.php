<?php require "nabvar.php"; ?>


	<div class="container">

		<div class="row">
			<div class="col">
				<h1 class="txt-h1" align="center">Calcular el promedio necesario para cursar la materia <br><br></h1>
			</div>
			
		</div>


<div class="row">

	<div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">


<div class="card" style="width: 20rem;">
  <img src="../utileria/img/logo.png" class="card-img-top" alt="No se encuentro la imgen">
  <div class="card-body">





<form action="?action=procesar" method="POST">

			<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group ">
					<p class="texto-evaluacion">Primera evaluación</p>
					<div class="input-group-prepend">
						<div class="input-group-text iconos"><img src="../utileria/img/1.svg" height="25" width="25" alt="No se encontro la imagen"></div>
						<input type="number"  placeholder="<?php if (isset($nota1)) {echo 'Calculo anterior '.$nota1;} ?>" class="form-control input" required="" name="nota1" min="0" max="10" step="any">
					</div>
				</div>		
			</div>

	


			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group ">
					<p class="texto-evaluacion">Segunda evaluación</p>
					<div class="input-group-prepend">
						<div class="input-group-text iconos"><img src="../utileria/img/2.svg" height="25" width="25" alt="No se encontro la imagen"></div>
						<input type="number" placeholder="<?php if (isset($nota2)) {echo 'Calculo anterior '.$nota2;} ?>" required="" class="form-control input" name="nota2" min="0" max="10" step="any">
					</div>
				</div>		
			</div>


			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group ">
					<p class="texto-evaluacion">Tercera evaluación</p>
					<div class="input-group-prepend">
						<div class="input-group-text iconos"><img src="../utileria/img/3.svg" height="25" width="25" alt=""></div>
						<input type="number" placeholder="<?php if (isset($nota3)) {echo 'Calculo anterior '.$nota3;} ?>" required="" class="form-control input" name="nota3" min="0" max="10" step="any">
					</div>
				</div>		
			</div>



			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group ">
					<p class="texto-evaluacion">Cuarta evaluación</p>
					<div class="input-group-prepend">
						<div class="input-group-text iconos"><img src="../utileria/img/4.svg" height="25" width="25" alt="No se encontro la imagen"></div>
						<input type="number" placeholder="<?php if (isset($nota4)) {echo 'Calculo anterior '.$nota4;} ?>" required="" class="form-control input" name="nota4" min="0" max="10" step="any">
					</div>
				</div>		
			</div>



			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-group ">
					<p class="texto-evaluacion">Quinta evaluación</p>
					<div class="input-group-prepend">
						<div class="input-group-text iconos"><img src="../utileria/img/5.svg" height="25" width="25" alt="No se encontro la imagen"></div>
						<input type="number" placeholder="<?php if (isset($nota5)) {echo 'Calculo anterior '.$nota5;} ?>" required="" class="form-control input" name="nota5" min="0" max="10" step="any">
					</div>
				</div>

			</div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				
				<button class="btn btn-primary btn-block" type="submit" name="enviar"><b>Calcular <i class="fas fa-calculator"></i>  </b></button>
			</div>


			
			
			
				
			</div>
			

</form>
   



  </div>
</div>




		
	</div>

	<div class="col-md-6 col-lg-8 col-sm-12 col-xs-12 contenedor-img">

		<div class="fondo"></div>
			
		
		
	</div>
	
</div>

		


		
	</div>	
	

	<input id="valor" value="<?php echo $pro;?>" type="hidden">
	<input id="valor1" value="<?php echo $img;?>" type="hidden">


	<?php require "footer.php"; ?>





