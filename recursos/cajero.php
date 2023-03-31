<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Cajero</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/cajero.css">
</head>
<body>
	<?php/*
	session_start();
	if(!isset($_SESSION['tipocuenta'])){
		header('Location:../index.php');
	}else{
		if($_SESSION['tipocuenta']!=1){
			header('Location:../index.php');
		}
	}*/
	?>
	
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>

	<div class="diseñoMenu">
		<p>Menu Cajero</p>
		<hr>
	<div class="container-fluid">
  		<div class="row">
    		<div class="col">
      			<button> Ingresar Persona</button><br><br>
      			<button> Ingresar dinero a una cuenta: </button><br><br>
      			<button> Retirar dinero de una cuenta</button><br><br>
                  <button> Realizar un prestamo</button><br><br>
      			<button onclick="location.href='cerrar.php'">Salir</button>
    			</div>
    			<div class="col">
    			<div class="rightside">	
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