<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco de Agricultura</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>
<!--Barra de titulo-->
	<div id="barra">
		<a class="waves-effect waves-light btn">Banco de agricultura</a>
	</div>
	<div class="IniciSec"><h1>Inicio de sesión</h1></div>
<!--Formulario de login-->
<form method="post" action="">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" /><br><br>
	  <label for="contrasena">Contraseña</label>
      <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña" />
	  <?php
		include("base/procesar.php");
	  ?>
	  <input type="submit" value="Ingresar" />

      <div class="forgot-password">
        <a href="#">¿Olvidaste tu contraseña?</a> | <a href="#">Crear usuario</a>
      </div>
</form>
<br><br><br><br><br>
<script src="js/materialize.min.js"></script>
</body>
</html>