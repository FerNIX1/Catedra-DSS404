<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Cuenta Cliente</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/color.css">
	<style type="text/css">
		body {

			background-image: url(../img/WhatsApp\ Image\ 2023-04-29\ at\ 7.29.05\ PM.jpeg);
			background-size:auto;
			background-repeat: no-repeat;
			font-family: Arial, sans-serif;
           
		}
	</style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

	<?php
	echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
	echo '<a class="navbar-brand" href="#">Banco de Agricultura</a>';

	echo '</div>';
	echo '</nav>';
	
	echo '<div class="container mt-5" style="background:rgba(248, 249, 250,0.7); border-radius:10px; padding:50px; box-shadow:0px 2px 50px 10px black;">';
    echo '
    <div class="container">
    
    <form method="post">
    <i class="fa fa-clipboard" style="font-size:70px; margin-left:45%;"></i>
      <div class="form-group">
        <label for="nombreCuenta">Nombre de cuenta:</label>
        <input type="text" id="nombreCuenta" name="nombreCuenta" class="form-control" />
      </div>
  
      <div class="form-group">
        <label for="TipoCuenta">Tipo de Cuenta:</label>
        <select id="TipoCuenta" name="TipoCuenta" class="form-control" required>
          <option value="">--Seleccione una opción--</option>
          <option value="Cuenta ahorros">Cuenta Ahorros</option>
          <option value="Cuenta Corriente">Cuenta Corriente</option>
        </select>
      </div>
  
      <div class="form-group">
        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" class="form-control" />
      </div>
  
      <div class="form-group">
        <input  type="submit" name="crear" value="Crear" class="btn btn-primary" />
        <input type="submit" name="cancelar" value="Cancelar" class="btn btn-secondary" />
      </div>
    </form>
  </div>';
	?>
    </div>
    <br><br><br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>