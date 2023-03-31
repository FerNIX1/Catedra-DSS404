<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco De Agricultura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--Barra -->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
	<div class="IniciSec"><h1>Inicio de sesión</h1></div>

<!--Formulario-->
	<form method="post" action="">	
	<label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" /><br><br>
	  <label for="contrasena">Contraseña</label>
      <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña" /> 
	  <?php
		include("base/procesar.php");
	  ?>
<!--Para ir a recupear tu contraseña-->

	  <input type="submit" name="enviar" value="Ingresar" />
      <div class="forgot-password">
        <a href="recursos/olvidoContra.php">¿Olvidaste tu contraseña?</a> | <a href="recursos/registro.php">Crear usuario</a>
      </div>
    </form>
    <br><br><br><br>

<script src="js/materialize.min.js"></script>
</body>
</html>