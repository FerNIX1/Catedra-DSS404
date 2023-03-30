<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<!--Barra -->
<div class="barra">
	<blockquote><p>Banco De Agricultura</p></blockquote>
</div>
<!--	Nuestro proyecto-->
<!--Formulario-->
<div class="wrapper">
<div class="formulario">
	<div class="encabezado"><h2>Registrarse</h2><hr></div>

	<form action="registro1.php" method="post">	
	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario" required><br><br>

	  <label for="contra">Contraseña:</label>
	  <input type="password" id="contra"  name="contra" required><br><br>

	  <label for="contra">Fecha de nacimiennto:</label>
	  <input type="date" id="contra"  name="fecnac" required><br><br>

	  <label for="correos">Correo:</label>
	  <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required><br><br>

	  <label for="dui">DUI:</label>		
	  <input type="text" pattern="\d{8}-\d" id="dui"  name="dui" placeholder="12345678-9" required><br><hr>

	  <input type="submit" value="Registrar">
	</form> 
	</div>
	</div>

	
	 
</form>
</body>
</html>