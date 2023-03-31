<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<!--Barra -->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
	<div class="IniciSec"><h1>Registrar</h1></div>

	<form action="registro1.php" method="post">	
	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario" required><br>

	  <label for="contra">Contraseña:</label>
	  <input type="password" id="contra"  name="contra" required><br>

	  <label for="contra">Fecha de nacimiento:
	  <input type="date" id="contra"  name="fecnac" required> </label><br>

	  <label for="correos">Correo:
	  <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></label><br><br>

	  <label for="dui">DUI:</label>		
	  <input type="text" pattern="\d{8}-\d" id="dui"  name="dui" placeholder="12345678-9" required><br><hr>

	  <input type="submit" value="Registrar">
	</form> 
</form>
</body>
</html>