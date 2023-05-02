<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Cajero</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/color.css">
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['tipocuenta'])){
		header('Location:../index.php');
	}else{
		if($_SESSION['tipocuenta']!=4){
			header('Location:../index.php');
		}
	}
	?><?php
	echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
	echo '<a class="navbar-brand" href="#">Banco de Agricultura</a>';

	echo '</div>';
	echo '</nav>';
	
	echo '<div class="container mt-5" style="background:rgba(248, 249, 250,0.7); border-radius:10px; padding:50px; box-shadow:0px 2px 50px 10px black;">';
	echo '<div class="row">';
	echo '<div class="col-lg-6">';
	echo '<h1 style="font-weight:bold;">Menu Cajero</h1>';
	echo '<hr>';
	echo '<div class="mb-3" style="opacity:1;">';
	echo '<a href="cajeroAgregarUser.php"><button class="btn  btn-block mb-2">Ingresar Persona</button></a>';
	echo '<a href="cajeroIngresoDinero.php"><button class="btn  btn-block mb-2">Ingresar Dinero a una cuenta</button></a>';
	echo '<a href="cajeroRetiroDinero.php"><button class="btn  btn-block mb-2">Retirar dinero de una cuenta</button></a>';
	echo '<a href="cajeroRealizarPrestamo.php"><button class="btn  btn-block mb-2">Realizar un Prestamo</button></a>';
	echo '<a href="../index.php"><button class="btn  btn-block mb-2">Salir</button></a>';
	echo '</div>';
	echo '</div>';
	echo '<div class="col-lg-6">';
	echo '<div class="card">';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Movimientos</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	echo '<tr>';
	echo '<td>.</td>';
	echo '</tr>';

	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';	
	?>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<!--vista cajero-->