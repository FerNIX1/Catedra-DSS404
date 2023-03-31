<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/validaciones.css">

</head>
<body>
	<?php include("registro1.php");?>
<!--Barra -->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
	<div class="IniciSec"><h1>Registrar</h1></div>

	<form action="registro1.php" method="post">	
	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario"><br>

	  <label for="contra">Contraseña:</label>
	  <input type="password" id="contra"  name="contra">
	  <?php if(in_array("La contraseña debe tener al menos 8 caracteres.", $error)) { echo "<p class='error'>La contraseña debe tener al menos 8 caracteres.</p>"; } ?><br>

	  <label for="contra">Fecha de nacimiento:
	  <input type="date" id="contra"  name="fecnac" required> 
	  <?php if(in_array("El formato de fecha de nacimiento es incorrecto. Debe tener el formato AAAA-MM-DD.", $error)) { echo "<p class='error'>El formato de fecha de nacimiento es incorrecto. Debe tener el formato DD-MM-AAAA.</p>"; } ?>
	  </label><br>

	  <label for="correos">Correo:
	  <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></label><br><br>

	  <label for="dui">DUI:</label>		
	  <input type="text" pattern="\d{8}-\d" id="dui"  name="dui" placeholder="12345678-9"><br><hr>

	  <input type="submit" value="Registrar" name='submit'>
	</form> 

	
</form>
</body>
</html>