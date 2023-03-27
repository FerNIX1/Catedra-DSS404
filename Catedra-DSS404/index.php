<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<!--Barra -->
<div class="barra">
	<blockquote><h3>Banco De Agricultura</h3></blockquote>
</div>

<!--Formulario-->
<div class="wrapper">
<div class="formulario">
	<div class="encabezado"><h2>Login</h2><hr></div>
	<form method="post" action="">	
	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario"><br><br>
	  <label for="contra">Contraseña:</label>
	  <input type="text" id="contra"  name="contra"><br>
	  <?php
include("base/procesar.php");
?>
	  <div class="opciones">	
	  <a href="recursos/olvidoContra.php" id="btncrear">Olvide contraseña</a>|
	  <a href="recursos/registro.php">Crear Cuenta</a>
	  </div>
	  <input type="submit" name="enviar" value="LOGIN">
	  
	</form> 
	</div>
	</div>
</body>
</html>