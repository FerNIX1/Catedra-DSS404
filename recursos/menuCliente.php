<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Cliente</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styleMenu.css">
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['tipocuenta'])){
		header('Location:../index.php');
	}else{
		if($_SESSION['tipocuenta']!=1){
			header('Location:../index.php');
		}
	}
	?>
	<!--Menu para los clientes-->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>

	<div class="diseñoMenu">
		<p>Menu Cliente</p>
		<hr>
	<div class="container-fluid">
  		<div class="row">
    		<div class="col">
      			<button> Crear Cuenta</button><br><br>
      			<button> Su saldo es: </button><br><br>
      			<button> $00.00</button><br><br>
      			<button onclick="location.href='cerrar.php'">Salir</button>
    			</div>
    			<div class="col">
    			<div class="rightside">	
      			<button> Retiros</button>
      			<button> Transferencias: </button><br> <br>
      			<table>
      				<tr>
      					<th>Movimientos</th>
      				</tr>
      				<tr><td>.</td></tr>
      				<tr><td>.</td></tr>
      				<tr><td></td></tr>
      				<tr><td></td></tr>
      				<tr><td></td></tr>
      				<tr><td></td></tr>
      			</table>

      			</div>
    			</div>
  			</div>
		</div>
	</div>

</body>
</html>