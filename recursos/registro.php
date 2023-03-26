<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<!--Barra -->
<div class="barra">
	<blockquote><p>Banco De Agricultura</p></blockquote>
</div>

<!--Formulario-->
<div class="wrapper">
<div class="formulario">
	<div class="encabezado"><h2>Registrarse</h2><hr></div>
	<form>	
	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario" required><br><br>
	  <label for="contra">Contraseña:</label>
	  <input type="text" id="contra"  name="contra" required><br><br>
	  <label for="correos">Correo:</label>
	  <input type="mail" id="correo"  name="correo" required><br><br>
	  <label for="dui">DUI:</label>		
	  <input type="text" pattern="\d{8}-\d" id="dui"  name="dui" required><br><hr>
	  <input type="submit" value="Registrar">
	</form> 
	</div>
	</div>
</body>
</html>