<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../utileria/img/prom.png" />
	<title>Mi promedio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../utileria/iconos/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../utileria/estilos.css">


	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



	
</head>

<body>
	



	<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="../controller/notas.php"><img src="../utileria/img/prom.png" height="60" alt="No se encuentro la imagen"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../controller/notas.php"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controller/promedio.php"><i class="fas fa-square-root-alt"></i> Parcial y actividades</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-chalkboard-teacher"></i> Instrucciones</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instrucciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="../utileria/img/promedio.png" height="500" class="img-instruc" style="position: relative; width: auto; margin: auto;  max-width: 470px;" alt="">
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
      </li>

       <li class="nav-item">
        <a class="nav-link" target="_bank" href="http://portal.utec.edu.sv/(S(tvfhoybilk0mtbpvw1pnvpgf))/login.aspx"><i class="fas fa-user-circle"></i> Portal utec</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" target="_bank"  href="https://www.utecvirtual.edu.sv/"><i class="far fa-user-circle"></i> Utec virtual</a>
      </li>
      
      
    </ul>
  </div>
</nav>

<div>
	<br><br><br>
</div>


<!-- <a class="navbar-brand" href="../controller/notas.php"><img src="../utileria/img/prom.png" height="60" alt="No se encuentro la imagen"></a> -->