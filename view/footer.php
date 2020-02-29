<div>
	<br><br><br>
</div>

<footer>
	<br><br>
		<div class="container">
			<div class="row">


				<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
					<p style="color: #4F4F4F; font-weight: bold !important;">Información</p>
					<p  style="color: #4F4F4F; text-align: justify;">Esta página web está hecha con el fin de ayudar a los estudiantes de la Universidad tecnológica de El Salvador, proporcionando el calculo de la nota final con valores ficticios que motivaran al estudiante obtener una mejor nota final por materia.</p>
					<a href="../controller/notas.php"><img src="../utileria/img/prom.png" height="75" class="img-responsive imgfooter"></a>

				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
					<p style="color: #4F4F4F; font-weight: bold !important;">Tecnologias ocupadas</p>
					<p style="color: #4F4F4F !important;"><i style="color: #4F5B93;" class="fab fa-php ico"></i> Php</p>
					<p style="color: #4F4F4F !important;"><i style="color:#cfc23a; " class="fab fa-js-square ico"></i>  JavaScript</p>
					<p style="color: #4F4F4F !important;"><i style="color: #e8700e; "  class="fab fa-html5 ico"></i>  Html5</p>
					<p style="color: #4F4F4F !important;"><i style="color: #3454ad;"  class="fab fa-css3-alt ico"></i>  Css3</p>
					<p style="color: #4F4F4F !important;"><i style="color: #2E64FE; "  class="fab fa-font-awesome ico"></i>  Font Awesome</p>
					<p style="color: #4F4F4F !important;"><i style="color: #563d7c; "  class="fab fa-bootstrap ico"></i>  Bootstrap 4</p>
				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
					<p style="color: #4F4F4F !important; font-weight: bold;">Soporte</p>
					<a style="text-decoration: none; color:#4F4F4F; " href=""><p>Reportar algún problema?</p></a>

					<a style="text-decoration: none; color:#4F4F4F; " href=""><p>Preguntas</p></a>

					<a style="text-decoration: none; color:#4F4F4F; " href=""><p>Sugerencias</p></a>

					<a style="text-decoration: none; color:#4F4F4F; " href=""><p>Necesitas ayuda?</p></a>

					<a style="text-decoration: none; color:#4F4F4F; " href=""><p><i class="fab fa-whatsapp-square" style="font-size: 30px; color: green;"></i></p></a>

				</div>

				

			</div>
		</div>
		<br><br>
	</footer>

	

	<div class="container-fluid fondo-footer">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<br>
					<p class="copyright">Copyright All rights reserved | by Samuel Cortez</p>
			</div>
			
		</div>
		
	</div>




<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="../utileria/iconos/js/all.min.js"></script>

  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




		<?php 

		if (isset($resultado)) {?>

			<?php if ($total <= 5.9){  ?>

				<script type="text/javascript">

					var resultado = $('#valor').val();
					var img = $('#valor1').val();


					Swal.fire({

						icon: 'error',
						title: resultado,
						html: '<img height="250" src="'+img+'">',			
						showConfirmButton: true,
						timer: 5000
					});	

				</script>

			<?php }elseif ($total <= 6.9) { ?>

				<script type="text/javascript">

					var resultado = $('#valor').val();
					var img = $('#valor1').val();


					Swal.fire({

						icon: 'warning',
						title: resultado,
						html: '<img height="250" src="'+img+'">',			
						showConfirmButton: true,
						timer: 5000
					});	

				</script>


			<?php }elseif ($total <= 7.9) { ?>

				<script type="text/javascript">

					var resultado = $('#valor').val();
					var img = $('#valor1').val();


					Swal.fire({

						icon: 'success',
						title: resultado,
						html: '<img height="250" src="'+img+'">',			
						showConfirmButton: true,
						timer: 5000
					});	

				</script>

			<?php }elseif ($total >=8) { ?>
				
				<script type="text/javascript">

					var resultado = $('#valor').val();

					
					Swal.fire({
						title: resultado,
						width: 600,
						padding: '3em',
						background: '#fff url("https://www.prensalibre.com/wp-content/uploads/2018/12/bbd526a1-1ead-4e12-8198-dae995f06238.jpg?quality=82&w=760&h=430&crop=1")',
						backdrop: `
						rgba(0,0,123,0.4)
						url("https://media.giphy.com/media/2pGvpSk1wEooM/giphy.gif")
						left top
						no-repeat
						`
					})

				</script> 


				
			<?php } ?>


		<?php } ?>
	


 </body>


</html>